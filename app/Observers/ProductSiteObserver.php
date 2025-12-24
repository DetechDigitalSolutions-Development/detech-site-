<?php

namespace App\Observers;

use App\Models\ProductSite;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class ProductSiteObserver
{
    /**
     * Handle the ProductSite "creating" event.
     */
    public function creating(ProductSite $productSite): void
    {
        Log::info("ProductSiteObserver: Creating new product site", [
            'title' => $productSite->product_title
        ]);
        
        // Generate slug if empty
        if (empty($productSite->site_slug) && !empty($productSite->product_title)) {
            $productSite->site_slug = $this->generateUniqueSlug($productSite->product_title);
            Log::info("Generated slug: {$productSite->site_slug}");
        }
        
        // Set default location
        if (empty($productSite->site_location)) {
            $productSite->site_location = 'global';
        }
        
        // Ensure either product_link or site_file is set
        $this->validateFileLinkLogic($productSite);
    }

    /**
     * Handle the ProductSite "created" event.
     */
    public function created(ProductSite $productSite): void
    {
        Log::info('ProductSite created successfully', [
            'id' => $productSite->id,
            'title' => $productSite->product_title,
            'type' => $productSite->product_link ? 'External Link' : 'Zip Upload'
        ]);
        
        // Clear cache
        cache()->forget('product-sites.list');
        cache()->forget('product-sites.active');
    }

    /**
     * Handle the ProductSite "updating" event.
     * This is CRITICAL for file cleanup when fields are changed
     */
    public function updating(ProductSite $productSite): void
    {
        Log::info("ProductSiteObserver: Updating product site ID {$productSite->id}", [
            'dirty_fields' => array_keys($productSite->getDirty())
        ]);
        
        // 1. Handle featured image change - delete old file
        if ($productSite->isDirty('featured_img')) {
            $oldFeaturedImg = $productSite->getOriginal('featured_img');
            $this->deleteFileIfExists($oldFeaturedImg, 'featured image');
            Log::info("Featured image changed from: {$oldFeaturedImg} to: {$productSite->featured_img}");
        }
        
        // 2. Handle zip file change - delete old zip and extracted files
        if ($productSite->isDirty('site_file')) {
            $oldSiteFile = $productSite->getOriginal('site_file');
            $oldExtractedPath = $productSite->getOriginal('extracted_path');
            
            Log::info("Site file changed. Old: {$oldSiteFile}, New: {$productSite->site_file}");
            
            // Delete old zip file
            if ($oldSiteFile) {
                $this->deleteFileIfExists($oldSiteFile, 'zip file');
            }
            
            // Delete old extracted directory
            if ($oldExtractedPath) {
                $this->deleteDirectoryIfExists($oldExtractedPath, 'extracted directory');
            }
            
            // Clear extracted_path when uploading new zip
            $productSite->extracted_path = null;
        }
        
        // 3. Handle switching FROM zip TO external link
        if ($productSite->isDirty('product_link') && $productSite->product_link) {
            Log::info("Product link changed to: {$productSite->product_link}");
            
            // If we're switching from zip to external link, delete zip files
            if ($productSite->getOriginal('site_file') && !$productSite->site_file) {
                $oldSiteFile = $productSite->getOriginal('site_file');
                $oldExtractedPath = $productSite->getOriginal('extracted_path');
                
                Log::info("Switching from zip to external link. Cleaning up old files...");
                
                // Delete old zip file
                if ($oldSiteFile) {
                    $this->deleteFileIfExists($oldSiteFile, 'old zip file during switch');
                }
                
                // Delete old extracted directory
                if ($oldExtractedPath) {
                    $this->deleteDirectoryIfExists($oldExtractedPath, 'old extracted directory during switch');
                }
                
                // Clear the zip-related fields
                $productSite->site_file = null;
                $productSite->extracted_path = null;
            }
        }
        
        // 4. Handle switching FROM external link TO zip (clear product link)
        if ($productSite->isDirty('site_file') && $productSite->site_file) {
            // If we're uploading a new zip, clear the product link
            Log::info("Starting");
            if ($productSite->getOriginal('product_link') && !$productSite->product_link) {
                Log::info("Switching from external link to zip. Clearing product link.");
                $productSite->product_link = null;
            }
        }
        
        // 5. Regenerate slug if title changed and slug is empty
        if ($productSite->isDirty('product_title') && empty($productSite->site_slug)) {
            $newSlug = $this->generateUniqueSlug($productSite->product_title, $productSite->id);
            $productSite->site_slug = $newSlug;
            Log::info("Regenerated slug from title: {$newSlug}");
        }
        
        // 6. Handle extracted_path change (if manually changed)
        if ($productSite->isDirty('extracted_path') && $productSite->getOriginal('extracted_path')) {
            $oldExtractedPath = $productSite->getOriginal('extracted_path');
            $this->deleteDirectoryIfExists($oldExtractedPath, 'old extracted path');
        }
    }

    /**
     * Handle the ProductSite "updated" event.
     */
    public function updated(ProductSite $productSite): void
    {
        Log::info('ProductSite updated successfully', [
            'id' => $productSite->id,
            'changes' => $productSite->getChanges()
        ]);
        
        // Clear cache
        cache()->forget('product-sites.list');
        cache()->forget('product-site.' . $productSite->site_slug);
        
        // Auto-extract zip if uploaded but not extracted
        // if ($productSite->site_file && !$productSite->extracted_path) {
        //     $this->autoExtractZip($productSite);
        // }
    }

    /**
     * Handle the ProductSite "deleting" event.
     */
    public function deleting(ProductSite $productSite): void
    {
        Log::info("ProductSiteObserver: Deleting product site ID {$productSite->id}", [
            'title' => $productSite->product_title,
            'featured_img' => $productSite->featured_img,
            'site_file' => $productSite->site_file,
            'extracted_path' => $productSite->extracted_path
        ]);
        
        // Store original values for cleanup (using a custom attribute)
        $productSite->setAttribute('_observer_files_to_delete', [
            'featured_img' => $productSite->getOriginal('featured_img') ?? $productSite->featured_img,
            'site_file' => $productSite->getOriginal('site_file') ?? $productSite->site_file,
            'extracted_path' => $productSite->getOriginal('extracted_path') ?? $productSite->extracted_path,
            'site_slug' => $productSite->getOriginal('site_slug') ?? $productSite->site_slug
        ]);
    }

    /**
     * Handle the ProductSite "deleted" event.
     * This is where we actually delete the files
     */
    public function deleted(ProductSite $productSite): void
    {
        $filesToDelete = $productSite->getAttribute('_observer_files_to_delete') ?? [];
        
        Log::info('ProductSite deleted. Cleaning up files...', [
            'id' => $productSite->id,
            'files_to_delete' => $filesToDelete
        ]);
        
        // 1. Delete featured image
        if (!empty($filesToDelete['featured_img'])) {
            $this->deleteFileIfExists($filesToDelete['featured_img'], 'featured image on delete');
        }
        
        // 2. Delete zip file (if exists)
        if (!empty($filesToDelete['site_file'])) {
            $this->deleteFileIfExists($filesToDelete['site_file'], 'zip file on delete');
        }
        
        // 3. Delete extracted directory (if exists)
        if (!empty($filesToDelete['extracted_path'])) {
            $this->deleteDirectoryIfExists($filesToDelete['extracted_path'], 'extracted directory on delete');
        }
        
        // 4. Clean up empty parent directories
        $this->cleanupEmptyDirectories();
        
        // 5. Clear cache
        cache()->forget('product-sites.list');
        cache()->forget('product-sites.active');
        
        Log::info('ProductSite deletion cleanup completed', ['id' => $productSite->id]);
    }

    /**
     * Handle the ProductSite "saving" event (both creating and updating).
     */
    public function saving(ProductSite $productSite): void
    {
        // Trim string fields
        $this->trimFields($productSite);
        
        // Ensure slug is valid URL format
        if (!empty($productSite->site_slug)) {
            $productSite->site_slug = Str::slug($productSite->site_slug);
        }
        
        // Validate the file/link logic
        $this->validateFileLinkLogic($productSite);
    }

    /**
     * Generate unique slug.
     */
    private function generateUniqueSlug(string $title, ?int $excludeId = null): string
    {
        $slug = Str::slug($title);
        $originalSlug = $slug;
        $count = 1;

        while (ProductSite::where('site_slug', $slug)
            ->when($excludeId, fn($q) => $q->where('id', '!=', $excludeId))
            ->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        return $slug;
    }

    /**
     * Validate file vs link logic.
     */
    private function validateFileLinkLogic(ProductSite $productSite): void
    {
        // For new records, ensure either product_link or site_file is provided
        if (!$productSite->exists) {
            if (empty($productSite->product_link) && empty($productSite->site_file)) {
                throw new \Exception('Either Product Link or Site File must be provided');
            }
        }
        
        // If product_link is provided and site_file exists, clear site_file (external link takes precedence)
        // if (!empty($productSite->product_link) && !empty($productSite->site_file)) {
        //     Log::info("Both product_link and site_file provided. Clearing site_file since product_link takes precedence.");
        //     $productSite->site_file = null;
        //     $productSite->extracted_path = null;
        // }
        
        // Validate product_link URL format if provided
        if (!empty($productSite->product_link) && empty($productSite->site_file)) {
            if (!filter_var($productSite->product_link, FILTER_VALIDATE_URL)) {
                throw new \Exception('Please enter a valid URL for the product link');
            }
        }
    }

    /**
     * Auto-extract zip file after upload.
     */
    private function autoExtractZip(ProductSite $productSite): void
    {
        try {
            Log::info("Attempting auto-extraction for product site ID {$productSite->id}");
            
            if (!$productSite->site_file) {
                Log::warning("No site_file to extract");
                return;
            }

            $zipPath = storage_path('app/public/' . $productSite->site_file);
            
            if (!file_exists($zipPath)) {
                Log::error("Zip file not found at: {$zipPath}");
                return;
            }

            Log::info("Zip file found, extracting...");
            
            // Call model's extraction method
            $extractedPath = $productSite->processZipFile($zipPath);
            
            if ($extractedPath) {
                // The processZipFile method already saves the extracted_path
                Log::info("✅ Auto-extraction successful");
            } else {
                Log::warning("Auto-extraction returned no path");
            }
        } catch (\Exception $e) {
            Log::error('Auto-extraction failed: ' . $e->getMessage());
        }
    }

    /**
     * Delete file if it exists (with multiple path formats).
     */
    private function deleteFileIfExists(?string $filePath, string $description = 'file'): void
    {
        if (empty($filePath)) {
            Log::info("No {$description} path provided for deletion");
            return;
        }
        
        Log::info("Attempting to delete {$description}: {$filePath}");
        
        // Try multiple possible path formats
        $pathsToTry = [
            $filePath,
            'public/' . ltrim($filePath, '/'),
            ltrim($filePath, '/'),
            str_replace('public/', '', $filePath),
            'app/public/' . ltrim($filePath, '/'),
        ];
        
        foreach ($pathsToTry as $path) {
            if (Storage::exists($path)) {
                try {
                    Storage::delete($path);
                    Log::info("✅ Successfully deleted {$description}: {$path}");
                    return;
                } catch (\Exception $e) {
                    Log::error("Failed to delete {$description} {$path}: " . $e->getMessage());
                }
            }
        }
        
        // Also check with direct file_exists for absolute paths
        $absolutePath = storage_path('app/public/' . ltrim($filePath, '/'));
        if (file_exists($absolutePath)) {
            try {
                unlink($absolutePath);
                Log::info("✅ Successfully deleted {$description} using absolute path: {$absolutePath}");
                return;
            } catch (\Exception $e) {
                Log::error("Failed to delete {$description} using absolute path: " . $e->getMessage());
            }
        }
        
        Log::warning("⚠️ {$description} not found for deletion: {$filePath}");
    }

    /**
     * Delete directory if it exists (with multiple path formats).
     */
    private function deleteDirectoryIfExists(?string $directory, string $description = 'directory'): void
    {
        if (empty($directory)) {
            Log::info("No {$description} path provided for deletion");
            return;
        }
        
        Log::info("Attempting to delete {$description}: {$directory}");
        
        // Try multiple possible path formats
        $pathsToTry = [
            $directory,
            'public/' . ltrim($directory, '/'),
            ltrim($directory, '/'),
            str_replace('public/', '', $directory),
            'app/public/' . ltrim($directory, '/'),
        ];
        
        foreach ($pathsToTry as $path) {
            if (Storage::exists($path)) {
                try {
                    Storage::deleteDirectory($path);
                    Log::info("✅ Successfully deleted {$description}: {$path}");
                    return;
                } catch (\Exception $e) {
                    Log::error("Failed to delete {$description} {$path}: " . $e->getMessage());
                }
            }
        }
        
        // Also check with direct file_exists for absolute paths
        $absolutePath = storage_path('app/public/' . ltrim($directory, '/'));
        if (is_dir($absolutePath)) {
            try {
                $this->deleteDirectoryRecursive($absolutePath);
                Log::info("✅ Successfully deleted {$description} using absolute path: {$absolutePath}");
                return;
            } catch (\Exception $e) {
                Log::error("Failed to delete {$description} using absolute path: " . $e->getMessage());
            }
        }
        
        Log::warning("⚠️ {$description} not found for deletion: {$directory}");
    }

    /**
     * Recursively delete directory.
     */
    private function deleteDirectoryRecursive(string $dir): void
    {
        if (!is_dir($dir)) {
            return;
        }
        
        $files = array_diff(scandir($dir), ['.', '..']);
        foreach ($files as $file) {
            $path = $dir . '/' . $file;
            is_dir($path) ? $this->deleteDirectoryRecursive($path) : unlink($path);
        }
        
        rmdir($dir);
    }

    /**
     * Trim string fields.
     */
    private function trimFields(ProductSite $productSite): void
    {
        $fields = ['product_title', 'short_description', 'product_link', 'site_slug'];
        
        foreach ($fields as $field) {
            if (!empty($productSite->{$field}) && is_string($productSite->{$field})) {
                $original = $productSite->{$field};
                $productSite->{$field} = trim($productSite->{$field});
                if ($original !== $productSite->{$field}) {
                    Log::debug("Trimmed field {$field}: '{$original}' -> '{$productSite->{$field}}'");
                }
            }
        }
    }

    /**
     * Clean up empty directories after deletions.
     */
    private function cleanupEmptyDirectories(): void
    {
        try {
            Log::info("Starting empty directory cleanup...");
            
            // Directories to check for emptiness
            $directoriesToCheck = [
                'public/product-sites',
                'public/featured_img/product-sites',
                'public/product-sites/zips',
            ];
            
            foreach ($directoriesToCheck as $directory) {
                if (!Storage::exists($directory)) {
                    continue;
                }
                
                // Get all contents
                $allFiles = Storage::allFiles($directory);
                $allDirs = Storage::allDirectories($directory);
                
                Log::debug("Checking directory {$directory}: files=" . count($allFiles) . ", dirs=" . count($allDirs));
                
                // Check subdirectories first
                foreach ($allDirs as $subDir) {
                    $subFiles = Storage::allFiles($subDir);
                    $subSubDirs = Storage::directories($subDir);
                    
                    if (empty($subFiles) && empty($subSubDirs)) {
                        try {
                            Storage::deleteDirectory($subDir);
                            Log::info("🧹 Deleted empty subdirectory: {$subDir}");
                        } catch (\Exception $e) {
                            Log::error("Failed to delete empty subdirectory {$subDir}: " . $e->getMessage());
                        }
                    }
                }
                
                // Re-check the main directory
                $allFiles = Storage::allFiles($directory);
                $allDirs = Storage::allDirectories($directory);
                
                if (empty($allFiles) && empty($allDirs)) {
                    try {
                        Storage::deleteDirectory($directory);
                        Log::info("🧹 Deleted empty directory: {$directory}");
                    } catch (\Exception $e) {
                        Log::error("Failed to delete empty directory {$directory}: " . $e->getMessage());
                    }
                }
            }
            
            Log::info("Empty directory cleanup completed");
            
        } catch (\Exception $e) {
            Log::error('Error during empty directory cleanup: ' . $e->getMessage());
        }
    }

    /**
     * Handle the ProductSite "restored" event (if using soft deletes).
     */
    public function restored(ProductSite $productSite): void
    {
        Log::info('ProductSite restored', [
            'id' => $productSite->id,
            'title' => $productSite->product_title
        ]);
        
        cache()->forget('product-sites.list');
    }

    /**
     * Handle the ProductSite "forceDeleted" event (if using soft deletes).
     */
    public function forceDeleted(ProductSite $productSite): void
    {
        Log::info('ProductSite force deleted', [
            'id' => $productSite->id,
            'title' => $productSite->product_title
        ]);
        
        // Files are already deleted in the deleted() event
        cache()->forget('product-sites.list');
    }
}