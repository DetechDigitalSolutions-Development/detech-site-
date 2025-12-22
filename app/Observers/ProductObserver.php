<?php

namespace App\Observers;

use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class ProductObserver
{
    /**
     * Handle the Product "creating" event.
     */
    public function creating(Product $product): void
    {
        // Set default values for optional fields
        $this->setDefaults($product);
        
        // Ensure categories array
        $this->ensureArrayFields($product);
    }

    /**
     * Handle the Product "created" event.
     */
    public function created(Product $product): void
    {
        Log::info('Product created', [
            'id' => $product->id,
            'title' => $product->title,
            'client_name' => $product->client_name
        ]);
        
        // Clear products cache
        cache()->forget('products.list');
        cache()->forget('products.featured');
    }

    /**
     * Handle the Product "updating" event.
     */
    public function updating(Product $product): void
    {
        // Delete old featured image if changed
        if ($product->isDirty('featured_img')) {
            $this->deleteOldFile($product->getOriginal('featured_img'));
        }
        
        // Delete old product images if changed
        if ($product->isDirty('product_imgs')) {
            $this->deleteOldImages($product->getOriginal('product_imgs'));
        }
        
        // Ensure arrays for categories and challenge_points
        $this->ensureArrayFields($product);
    }

    /**
     * Handle the Product "updated" event.
     */
    public function updated(Product $product): void
    {
        Log::info('Product updated', [
            'id' => $product->id,
            'changes' => $product->getChanges()
        ]);
        
        // Clear cache
        cache()->forget('products.list');
        cache()->forget('product.' . $product->id);
        
        // If categories changed, update related cache
        if ($product->isDirty('categories')) {
            cache()->forget('products.categories');
        }
    }

    /**
     * Handle the Product "deleting" event.
     */
    public function deleting(Product $product): void
    {
        // Store file paths for deletion
        $product->setAttribute('_deleting_files', [
            'featured_img' => $product->featured_img,
            'product_imgs' => $product->product_imgs
        ]);
    }

    /**
     * Handle the Product "deleted" event.
     */
    public function deleted(Product $product): void
    {
        // Get stored file paths
        $files = $product->getAttribute('_deleting_files');
        
        // Delete featured image
        if (!empty($files['featured_img'])) {
            $this->deleteFile($files['featured_img']);
        }
        
        // Delete product images
        if (!empty($files['product_imgs']) && is_array($files['product_imgs'])) {
            $this->deleteImages($files['product_imgs']);
        }
        
        Log::info('Product deleted', [
            'id' => $product->id,
            'title' => $product->title
        ]);
        
        // Clear cache
        cache()->forget('products.list');
        cache()->forget('products.categories');
    }

    /**
     * Handle the Product "saving" event.
     */
    public function saving(Product $product): void
    {
        // Trim all string fields
        $this->trimFields($product);
        
        // Sanitize rich editor content
        if (!empty($product->content_section_1)) {
            $product->content_section_1 = $this->sanitizeContent($product->content_section_1);
        }
        
        if (!empty($product->content_section_2)) {
            $product->content_section_2 = $this->sanitizeContent($product->content_section_2);
        }
    }

    /**
     * Set default values.
     */
    private function setDefaults(Product $product): void
    {
        if (empty($product->owner)) {
            $product->owner = auth()->user()?->name ?? 'Admin';
        }
        
        if (empty($product->challenge_title)) {
            $product->challenge_title = 'Project Challenge';
        }
    }

    /**
     * Ensure fields are arrays.
     */
    private function ensureArrayFields(Product $product): void
    {
        // Categories
        if (!empty($product->categories) && is_string($product->categories)) {
            $product->categories = explode(',', $product->categories);
        }
        
        if (is_array($product->categories)) {
            $product->categories = array_unique(array_filter($product->categories));
        }
        
        // Challenge points
        if (!empty($product->challenge_points) && is_string($product->challenge_points)) {
            $product->challenge_points = explode(',', $product->challenge_points);
        }
        
        if (is_array($product->challenge_points)) {
            $product->challenge_points = array_unique(array_filter($product->challenge_points));
        }
    }

    /**
     * Delete old file.
     */
    private function deleteOldFile(?string $filePath): void
    {
        if (!empty($filePath) && Storage::disk('public')->exists($filePath)) {
            Storage::disk('public')->delete($filePath);
        }
    }

    /**
     * Delete old images.
     */
    private function deleteOldImages(?array $images): void
    {
        if (!empty($images) && is_array($images)) {
            foreach ($images as $image) {
                $this->deleteFile($image);
            }
        }
    }

    /**
     * Delete a file.
     */
    private function deleteFile(string $filePath): void
    {
        if (Storage::disk('public')->exists($filePath)) {
            Storage::disk('public')->delete($filePath);
        }
    }

    /**
     * Delete multiple images.
     */
    private function deleteImages(array $images): void
    {
        foreach ($images as $image) {
            $this->deleteFile($image);
        }
    }

    /**
     * Trim string fields.
     */
    private function trimFields(Product $product): void
    {
        $fields = ['title', 'short_description', 'client_name', 'owner', 'website'];
        
        foreach ($fields as $field) {
            if (!empty($product->{$field}) && is_string($product->{$field})) {
                $product->{$field} = trim($product->{$field});
            }
        }
    }

    /**
     * Sanitize content.
     */
    private function sanitizeContent(string $content): string
    {
        return trim(preg_replace('/(\r?\n){3,}/', "\n\n", $content));
    }
}