<?php

namespace App\Observers;

use App\Models\SiteSetting;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class SiteSettingObserver
{
    /**
     * Handle the SiteSetting "created" event.
     */
    public function created(SiteSetting $siteSetting): void
    {
        // Nothing to do on create
    }

    /**
     * Handle the SiteSetting "updated" event.
     * 
     * Clean up old files when setting value is updated
     */
    public function updated(SiteSetting $siteSetting): void
    {
        // Get the original value before update
        $originalValue = $siteSetting->getOriginal('value');
        $newValue = $siteSetting->value;
        
        // If there's no original value or it's empty, nothing to delete
        if (empty($originalValue)) {
            return;
        }
        
        // Handle file deletion based on setting type
        switch ($siteSetting->type) {
            case 'file':
                // Delete old file if it exists and value has changed
                if ($originalValue !== $newValue && !empty($originalValue)) {
                    $this->deleteFile($originalValue);
                }
                break;
                
            case 'image':
                // Delete old image if it exists and value has changed
                if ($originalValue !== $newValue && !empty($originalValue)) {
                    $this->deleteFile($originalValue);
                }
                break;
                
            case 'multiple_images':
                // Compare old and new image arrays
                try {
                    $originalImages = json_decode($originalValue, true) ?? [];
                    $newImages = json_decode($newValue, true) ?? [];
                    
                    // Find images that were removed
                    $removedImages = array_diff(
                        $this->extractImagePaths($originalImages),
                        $this->extractImagePaths($newImages)
                    );
                    
                    // Delete removed images
                    foreach ($removedImages as $imagePath) {
                        $this->deleteFile($imagePath);
                    }
                } catch (\Exception $e) {
                    // Log error if needed
                    Log::error('Error processing multiple_images update: ' . $e->getMessage());
                }
                break;
        }
    }

    /**
     * Handle the SiteSetting "deleted" event.
     * 
     * Clean up files when setting is deleted
     */
    public function deleted(SiteSetting $siteSetting): void
    {
        $this->deleteFilesByType($siteSetting);
    }

    /**
     * Handle the SiteSetting "deleting" event.
     * 
     * Clean up files before setting is deleted (for bulk deletes)
     */
    public function deleting(SiteSetting $siteSetting): void
    {
        $this->deleteFilesByType($siteSetting);
    }

    /**
     * Handle the SiteSetting "restored" event.
     */
    public function restored(SiteSetting $siteSetting): void
    {
        // Nothing to do on restore
    }

    /**
     * Handle the SiteSetting "force deleted" event.
     */
    public function forceDeleted(SiteSetting $siteSetting): void
    {
        $this->deleteFilesByType($siteSetting);
    }

    /**
     * Delete files based on setting type
     */
    private function deleteFilesByType(SiteSetting $siteSetting): void
    {
        if (empty($siteSetting->value)) {
            return;
        }
        
        switch ($siteSetting->type) {
            case 'file':
                $this->deleteFile($siteSetting->value);
                break;
                
            case 'image':
                $this->deleteFile($siteSetting->value);
                break;
                
            case 'multiple_images':
                try {
                    $images = json_decode($siteSetting->value, true) ?? [];
                    foreach ($this->extractImagePaths($images) as $imagePath) {
                        $this->deleteFile($imagePath);
                    }
                } catch (\Exception $e) {
                    Log::error('Error deleting multiple_images: ' . $e->getMessage());
                }
                break;
        }
    }

    /**
     * Delete a single file from storage
     */
    private function deleteFile(string $filePath): void
    {
        try {
            // Check if the path is a JSON string (could be from old format)
            if (json_decode($filePath) !== null) {
                return; // Skip JSON strings
            }
            
            // Remove storage path prefix if present
            $cleanPath = str_replace('storage/', '', $filePath);
            
            // Check if file exists in storage
            if (Storage::disk('public')->exists($cleanPath)) {
                Storage::disk('public')->delete($cleanPath);
                
                // Also try to delete any thumbnail versions if they exist
                $this->deleteThumbnails($cleanPath);
            }
        } catch (\Exception $e) {
            Log::warning('Failed to delete file: ' . $filePath . ' - ' . $e->getMessage());
        }
    }

    /**
     * Delete thumbnail versions of an image
     */
    private function deleteThumbnails(string $filePath): void
    {
        try {
            $pathInfo = pathinfo($filePath);
            $directory = $pathInfo['dirname'];
            $filename = $pathInfo['filename'];
            $extension = $pathInfo['extension'] ?? '';
            
            // Common thumbnail suffixes
            $thumbnailSuffixes = ['_thumb', '_thumbnail', '_small', '_medium', '_large'];
            
            foreach ($thumbnailSuffixes as $suffix) {
                $thumbnailPath = $directory . '/' . $filename . $suffix . '.' . $extension;
                
                if (Storage::disk('public')->exists($thumbnailPath)) {
                    Storage::disk('public')->delete($thumbnailPath);
                }
            }
        } catch (\Exception $e) {
            // Silent fail for thumbnails
        }
    }

    /**
     * Extract image paths from array (handles different formats)
     */
    private function extractImagePaths(array $images): array
    {
        $paths = [];
        
        foreach ($images as $image) {
            if (is_string($image)) {
                $paths[] = $image;
            } elseif (is_array($image) && isset($image['path'])) {
                $paths[] = $image['path'];
            }
        }
        
        return $paths;
    }
}