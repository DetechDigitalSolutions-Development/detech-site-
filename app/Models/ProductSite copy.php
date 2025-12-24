<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use ZipArchive;

class ProductSite extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_title',
        'featured_img',
        'short_description',
        'site_slug',
        'site_location',
        'site_file',
        'product_link', // Added new field
        'extracted_path',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * The "booted" method of the model.
     */
    protected static function booted(): void
    {
        static::creating(function ($productSite) {
            // Ensure slug is unique
            $productSite->site_slug = self::makeUniqueSlug($productSite->site_slug);

            // Auto-generate product link if not provided
            if (empty($productSite->product_link)) {
                $productSite->product_link = $productSite->generateProductLink();
            }
        });

        static::updating(function ($productSite) {
            // Ensure slug is unique when updating
            if ($productSite->isDirty('site_slug')) {
                $productSite->site_slug = self::makeUniqueSlug($productSite->site_slug, $productSite->id);
            }

            // Update product link if slug changes
            if ($productSite->isDirty('site_slug') && empty($productSite->product_link)) {
                $productSite->product_link = $productSite->generateProductLink();
            }
        });

        static::saving(function ($productSite) {
            // Ensure either product_link or site_file is provided, but not both
            if (empty($productSite->product_link) && empty($productSite->site_file)) {
                throw new \Exception('Either Product Link or Site File must be provided');
            }

            // If editing, allow keeping existing file if link is empty
            if ($productSite->exists && empty($productSite->product_link)) {
                if (empty($productSite->site_file) && empty($productSite->getOriginal('site_file'))) {
                    throw new \Exception('Either Product Link or Site File must be provided');
                }
            }

            // Auto-generate product link if not provided and using external link
            if (! empty($productSite->product_link) && empty($productSite->site_file)) {
                // Ensure it's a valid URL
                if (! filter_var($productSite->product_link, FILTER_VALIDATE_URL)) {
                    throw new \Exception('Please enter a valid URL for the product link');
                }
            }

            // Ensure slug is unique
            $productSite->site_slug = self::makeUniqueSlug($productSite->site_slug, $productSite->id);
        });

        // Delete files when model is deleted
        static::deleting(function ($productSite) {
            Log::info("DELETING EVENT FIRED for ProductSite ID: {$productSite->id}");
            $productSite->cleanupFiles();
        });
    }

    /**
     * Generate unique slug
     */
    private static function makeUniqueSlug($slug, $excludeId = null)
    {
        $originalSlug = $slug;
        $count = 1;

        while (self::where('site_slug', $slug)
            ->when($excludeId, function ($query) use ($excludeId) {
                $query->where('id', '!=', $excludeId);
            })
            ->exists()) {
            $slug = $originalSlug.'-'.$count;
            $count++;
        }

        return $slug;
    }

    /**
     * Generate product link
     */
    public function generateProductLink()
    {
        // Generate a demo/product link
        return route('product.site', $this->site_slug);
    }

    /**
     * Extract and store zip file
     */
    public function processZipFile($zipFile)
    {
        $zip = new ZipArchive;

        if ($zip->open($zipFile) === true) {
            // Create extraction directory
            $extractPath = 'product-sites/'.$this->site_slug.'/'.now()->timestamp;

            // Full storage path
            $fullExtractPath = storage_path('app/public/'.$extractPath);

            // Create directory if it doesn't exist
            if (! file_exists($fullExtractPath)) {
                mkdir($fullExtractPath, 0755, true);
            }

            // Extract zip
            $zip->extractTo($fullExtractPath);
            $zip->close();

            // Update model
            $this->extracted_path = $extractPath;
            $this->save();

            return $fullExtractPath;
        }

        throw new \Exception('Failed to extract zip file');
    }

    /**
     * Get site URL
     */
    // public function getSiteUrlAttribute()
    // {
    //     return url($this->site_slug);
    // }

    /**
     * Get product link with fallback
     */
    public function getProductLinkAttribute($value)
    {
        // Return stored product link or generate one
        return $value ?? $this->generateProductLink();
    }

    /**
     * Get demo link (alias for product_link)
     */
    public function getDemoLinkAttribute()
    {
        return $this->product_link;
    }

    /**
     * Get storage URL for extracted files
     */
    public function getSiteStorageUrlAttribute()
    {
        if (! $this->extracted_path) {
            return null;
        }

        return Storage::url($this->extracted_path);
    }

    /**
     * Get full extracted path
     */
    public function getFullExtractedPathAttribute()
    {
        if (! $this->extracted_path) {
            return null;
        }

        return storage_path('app/public/'.$this->extracted_path);
    }

    // In your ProductSite model, add these methods

    /**
     * Determine if site uses external link
     */
    public function usesExternalLink()
    {
        return ! empty($this->product_link) && empty($this->site_file);
    }

    /**
     * Determine if site uses uploaded zip
     */
    public function usesZipFile()
    {
        return ! empty($this->site_file);
    }

    /**
     * Get site URL based on configuration
     */
    public function getSiteUrlAttribute()
    {
        if ($this->usesExternalLink()) {
            return $this->product_link;
        }

        if ($this->extracted_path) {
            // This would need to be handled by a route that serves extracted files
            return url('/product-sites/'.$this->site_slug);
        }

        return null;
    }

    /**
     * Override the cleanupFiles method to handle both cases
     */
    public function cleanupFiles()
    {
        Log::info("=== STARTING CLEANUP FOR ProductSite ID: {$this->id} ===");
        Log::info("Site Slug: {$this->site_slug}");
        Log::info('Uses External Link: '.($this->usesExternalLink() ? 'Yes' : 'No'));
        Log::info('Uses Zip File: '.($this->usesZipFile() ? 'Yes' : 'No'));

        try {
            // Only clean up files if using zip upload
            if ($this->usesZipFile()) {
                // 1. Delete extracted directory
                if ($this->extracted_path) {
                    $extractedPath = 'public/'.trim($this->extracted_path, '/');
                    Log::info("Attempting to delete extracted path: {$extractedPath}");

                    if (Storage::exists($extractedPath)) {
                        Storage::deleteDirectory($extractedPath);
                        Log::info("✅ Successfully deleted extracted directory: {$extractedPath}");
                    } else {
                        Log::warning("⚠️ Extracted path does not exist: {$extractedPath}");

                        $altPath = trim($this->extracted_path, '/');
                        if (Storage::exists($altPath)) {
                            Storage::deleteDirectory($altPath);
                            Log::info("✅ Deleted using alternative path: {$altPath}");
                        }
                    }
                }

                // 2. Delete zip file
                if ($this->site_file) {
                    $zipPath = 'public/'.trim($this->site_file, '/');
                    Log::info("Attempting to delete zip file: {$zipPath}");

                    if (Storage::exists($zipPath)) {
                        Storage::delete($zipPath);
                        Log::info("✅ Successfully deleted zip file: {$zipPath}");
                    } else {
                        Log::warning("⚠️ Zip file does not exist: {$zipPath}");

                        $altZipPath = trim($this->site_file, '/');
                        if (Storage::exists($altZipPath)) {
                            Storage::delete($altZipPath);
                            Log::info("✅ Deleted zip using alternative path: {$altZipPath}");
                        }
                    }

                    // 3. Clean up empty parent directories
                    $this->cleanupEmptyDirectories();
                }
            }

            Log::info("=== CLEANUP COMPLETED FOR ProductSite ID: {$this->id} ===");

        } catch (\Exception $e) {
            Log::error("❌ ERROR during cleanup for ProductSite ID {$this->id}: ".$e->getMessage());
            Log::error('Stack trace: '.$e->getTraceAsString());
        }
    }

    /**
     * Clean up empty directories
     */
    private function cleanupEmptyDirectories()
    {
        try {
            // Clean up product-sites directories
            $basePath = 'public/product-sites';

            if (! Storage::exists($basePath)) {
                return;
            }

            // Get all site directories
            $siteDirs = Storage::directories($basePath);

            foreach ($siteDirs as $siteDir) {
                // Check if site directory is empty
                $contents = Storage::allFiles($siteDir);
                $subDirs = Storage::allDirectories($siteDir);

                if (empty($contents) && empty($subDirs)) {
                    Storage::deleteDirectory($siteDir);
                    Log::info("🧹 Deleted empty site directory: {$siteDir}");
                }
            }

            // Check if base directory itself is empty
            $baseContents = Storage::allFiles($basePath);
            $baseSubDirs = Storage::allDirectories($basePath);

            if (empty($baseContents) && empty($baseSubDirs)) {
                Storage::deleteDirectory($basePath);
                Log::info("🧹 Deleted empty base directory: {$basePath}");
            }

        } catch (\Exception $e) {
            Log::error('Error cleaning up empty directories: '.$e->getMessage());
        }
    }

    /**
     * Get index file path
     */
    public function getIndexFilePath()
    {
        if (! $this->full_extracted_path) {
            return null;
        }

        $possibleFiles = ['index.html', 'index.php', 'default.html', 'home.html'];

        foreach ($possibleFiles as $file) {
            $path = $this->full_extracted_path.'/'.$file;
            if (file_exists($path)) {
                return $this->extracted_path.'/'.$file;
            }
        }

        // Check for any .html or .php file in root
        $files = glob($this->full_extracted_path.'/*.{html,php}', GLOB_BRACE);

        if (! empty($files)) {
            $relativePath = str_replace(storage_path('app/public/'), '', $files[0]);

            return $relativePath;
        }

        return null;
    }

    /**
     * Scope for active products
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope for featured products (if you add featured field later)
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_active', true)
            ->whereNotNull('featured_img')
            ->orderBy('created_at', 'desc');
    }

    /**
     * Validate product link
     */
    public function validateProductLink()
    {
        if (empty($this->product_link)) {
            return false;
        }

        // Check if it's a valid URL
        return filter_var($this->product_link, FILTER_VALIDATE_URL) !== false;
    }
}
