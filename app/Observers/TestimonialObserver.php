<?php

namespace App\Observers;

use App\Models\Testimonial;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class TestimonialObserver
{
    /**
     * Handle the Testimonial "creating" event.
     */
    public function creating(Testimonial $testimonial): void
    {
        // Validate rating
        $this->validateRating($testimonial);
        
        // Set default values
        if (empty($testimonial->rating)) {
            $testimonial->rating = 5;
        }
    }

    /**
     * Handle the Testimonial "created" event.
     */
    public function created(Testimonial $testimonial): void
    {
        Log::info('Testimonial created', [
            'id' => $testimonial->id,
            'name' => $testimonial->name,
            'rating' => $testimonial->rating
        ]);
        
        // Clear cache
        cache()->forget('testimonials.list');
        cache()->forget('testimonials.featured');
        
        // Update average rating cache
        cache()->forget('testimonials.average_rating');
    }

    /**
     * Handle the Testimonial "updating" event.
     */
    public function updating(Testimonial $testimonial): void
    {
        // Delete old profile image if changed
        if ($testimonial->isDirty('profile_img')) {
            $this->deleteOldFile($testimonial->getOriginal('profile_img'));
        }
        
        // Validate rating
        $this->validateRating($testimonial);
    }

    /**
     * Handle the Testimonial "updated" event.
     */
    public function updated(Testimonial $testimonial): void
    {
        Log::info('Testimonial updated', [
            'id' => $testimonial->id,
            'changes' => $testimonial->getChanges()
        ]);
        
        // Clear cache
        cache()->forget('testimonials.list');
        cache()->forget('testimonial.' . $testimonial->id);
        
        // If rating changed, update average
        if ($testimonial->isDirty('rating')) {
            cache()->forget('testimonials.average_rating');
        }
    }

    /**
     * Handle the Testimonial "deleting" event.
     */
    public function deleting(Testimonial $testimonial): void
    {
        // Store profile image for deletion
        $testimonial->setAttribute('_deleting_profile_img', $testimonial->profile_img);
    }

    /**
     * Handle the Testimonial "deleted" event.
     */
    public function deleted(Testimonial $testimonial): void
    {
        // Delete profile image
        $profileImg = $testimonial->getAttribute('_deleting_profile_img');
        if (!empty($profileImg)) {
            $this->deleteFile($profileImg);
        }
        
        Log::info('Testimonial deleted', [
            'id' => $testimonial->id,
            'name' => $testimonial->name
        ]);
        
        // Clear cache
        cache()->forget('testimonials.list');
        cache()->forget('testimonials.average_rating');
    }

    /**
     * Handle the Testimonial "saving" event.
     */
    public function saving(Testimonial $testimonial): void
    {
        // Trim all string fields
        $this->trimFields($testimonial);
        
        // Truncate comments if too long
        if (!empty($testimonial->comments) && strlen($testimonial->comments) > 1000) {
            $testimonial->comments = substr($testimonial->comments, 0, 1000) . '...';
        }
        
        // Generate excerpt for display
        // if (!empty($testimonial->comments)) {
        //     $excerpt = strip_tags($testimonial->comments);
        //     $testimonial->setAttribute('excerpt', substr($excerpt, 0, 150) . (strlen($excerpt) > 150 ? '...' : ''));
        // }
    }

    /**
     * Validate rating.
     */
    private function validateRating(Testimonial $testimonial): void
    {
        if ($testimonial->rating < 1) {
            $testimonial->rating = 1;
        }
        
        if ($testimonial->rating > 5) {
            $testimonial->rating = 5;
        }
        
        // Round to nearest half if needed
        $testimonial->rating = round($testimonial->rating * 2) / 2;
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
     * Delete a file.
     */
    private function deleteFile(string $filePath): void
    {
        if (Storage::disk('public')->exists($filePath)) {
            Storage::disk('public')->delete($filePath);
        }
    }

    /**
     * Trim fields.
     */
    private function trimFields(Testimonial $testimonial): void
    {
        $fields = ['name', 'designation', 'comments'];
        
        foreach ($fields as $field) {
            if (!empty($testimonial->{$field}) && is_string($testimonial->{$field})) {
                $testimonial->{$field} = trim($testimonial->{$field});
            }
        }
    }
}