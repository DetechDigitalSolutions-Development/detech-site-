<?php

namespace App\Observers;

use App\Models\Blog;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class BlogObserver
{
    /**
     * Handle the Blog "creating" event.
     */
    public function creating(Blog $blog): void
    {
        // Ensure slug is generated from title if not provided
        if (empty($blog->slug) && !empty($blog->title)) {
            $blog->slug = $this->generateUniqueSlug($blog->title);
        }
        
        // If slug exists but contains spaces, slugify it
        if (!empty($blog->slug) && Str::contains($blog->slug, ' ')) {
            $blog->slug = $this->generateUniqueSlug($blog->slug);
        }
        
        // Set default values for required fields if empty
        $this->setDefaultContent($blog);
    }

    /**
     * Handle the Blog "created" event.
     */
    public function created(Blog $blog): void
    {
        // Log creation
        Log::info('Blog created', [
            'id' => $blog->id,
            'title' => $blog->title,
            'slug' => $blog->slug
        ]);
        
        // You could dispatch a job here for:
        // - Generating SEO metadata
        // - Sending notifications
        // - Indexing for search
        // dispatch(new ProcessNewBlogJob($blog));
    }

    /**
     * Handle the Blog "updating" event.
     */
    public function updating(Blog $blog): void
    {
        // Handle featured image change
        if ($blog->isDirty('featured_img')) {
            $this->deleteOldFile($blog->getOriginal('featured_img'));
        }
        
        // Handle blog images change
        if ($blog->isDirty('blog_imgs')) {
            $this->deleteOldImages($blog->getOriginal('blog_imgs'));
        }
        
        // Regenerate slug if title changed
        if ($blog->isDirty('title')) {
            $blog->slug = $this->generateUniqueSlug(
                $blog->title, 
                $blog->id // Exclude current blog from uniqueness check
            );
        }
        
        // Ensure arrays for categories and tags
        $this->ensureArrayFields($blog);
    }

    /**
     * Handle the Blog "updated" event.
     */
    public function updated(Blog $blog): void
    {
        // Log updates
        Log::info('Blog updated', [
            'id' => $blog->id,
            'changes' => $blog->getChanges()
        ]);
        
        // Clear cache if needed
        $this->clearCache($blog);
    }

    /**
     * Handle the Blog "saving" event.
     * Runs for both creating and updating.
     */
    public function saving(Blog $blog): void
    {
        // Sanitize content
        if (!empty($blog->content_section_1)) {
            $blog->content_section_1 = $this->sanitizeContent($blog->content_section_1);
        }
        
        if (!empty($blog->content_section_2)) {
            $blog->content_section_2 = $this->sanitizeContent($blog->content_section_2);
        }
        
        // Trim whitespace from all string fields
        $this->trimFields($blog);
    }

    /**
     * Handle the Blog "deleting" event.
     */
    public function deleting(Blog $blog): void
    {
        // Store data for after delete event
        $blog->setAttribute('_deleting_data', [
            'featured_img' => $blog->featured_img,
            'blog_imgs' => $blog->blog_imgs,
        ]);
    }

    /**
     * Handle the Blog "deleted" event.
     */
    public function deleted(Blog $blog): void
    {
        // Delete associated files
        $deletingData = $blog->getAttribute('_deleting_data');
        
        if ($deletingData) {
            if (!empty($deletingData['featured_img'])) {
                $this->deleteFile($deletingData['featured_img']);
            }
            
            if (!empty($deletingData['blog_imgs'])) {
                $this->deleteImages($deletingData['blog_imgs']);
            }
        }
        
        // Log deletion
        Log::info('Blog deleted', [
            'id' => $blog->id,
            'title' => $blog->title
        ]);
        
        // Clear related cache
        cache()->forget('blogs.list');
        cache()->forget('blog.' . $blog->slug);
    }

    /**
     * Handle the Blog "restored" event.
     * Only applicable if you're using soft deletes.
     */
    public function restored(Blog $blog): void
    {
        Log::info('Blog restored', [
            'id' => $blog->id,
            'title' => $blog->title
        ]);
    }

    /**
     * Handle the Blog "force deleted" event.
     * Only applicable if you're using soft deletes.
     */
    public function forceDeleted(Blog $blog): void
    {
        // Force delete already handled in deleted() event
    }

    /**
     * Generate a unique slug.
     */
    private function generateUniqueSlug(string $title, ?int $excludeId = null): string
    {
        $slug = Str::slug($title);
        $originalSlug = $slug;
        $count = 1;

        // Check for existing slugs
        while (Blog::where('slug', $slug)
            ->when($excludeId, function ($query) use ($excludeId) {
                return $query->where('id', '!=', $excludeId);
            })
            ->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        return $slug;
    }

    /**
     * Delete old featured image.
     */
    private function deleteOldFile(?string $filePath): void
    {
        if (!empty($filePath) && Storage::disk('public')->exists($filePath)) {
            Storage::disk('public')->delete($filePath);
        }
    }

    /**
     * Delete old blog images.
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
     * Delete a single file.
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
     * Set default content if empty.
     */
    private function setDefaultContent(Blog $blog): void
    {
        if (empty($blog->content_section_1)) {
            $blog->content_section_1 = '<p>Add your content here...</p>';
        }
        
        if (empty($blog->content_section_2)) {
            $blog->content_section_2 = '<p>Add your content here...</p>';
        }
    }

    /**
     * Ensure categories and tags are arrays.
     */
    private function ensureArrayFields(Blog $blog): void
    {
        // Convert string to array for categories
        if (!empty($blog->categories) && is_string($blog->categories)) {
            $blog->categories = explode(',', $blog->categories);
        }
        
        // Convert string to array for tags
        if (!empty($blog->tags) && is_string($blog->tags)) {
            $blog->tags = explode(',', $blog->tags);
        }
        
        // Ensure arrays are unique
        if (is_array($blog->categories)) {
            $blog->categories = array_unique($blog->categories);
        }
        
        if (is_array($blog->tags)) {
            $blog->tags = array_unique($blog->tags);
        }
    }

    /**
     * Trim whitespace from string fields.
     */
    private function trimFields(Blog $blog): void
    {
        $fieldsToTrim = ['title', 'slug', 'quote_text'];
        
        foreach ($fieldsToTrim as $field) {
            if (!empty($blog->{$field}) && is_string($blog->{$field})) {
                $blog->{$field} = trim($blog->{$field});
            }
        }
    }

    /**
     * Basic content sanitization.
     */
    private function sanitizeContent(string $content): string
    {
        // Remove excessive line breaks
        $content = preg_replace('/(\r?\n){3,}/', "\n\n", $content);
        
        // Trim content
        return trim($content);
    }

    /**
     * Clear cache related to the blog.
     */
    private function clearCache(Blog $blog): void
    {
        // Clear specific blog cache
        cache()->forget('blog.' . $blog->slug);
        
        // Clear blogs list cache if title, categories or tags changed
        if ($blog->isDirty(['title', 'categories', 'tags'])) {
            cache()->forget('blogs.list');
            cache()->forget('blogs.featured');
        }
    }
}