<?php

namespace App\Observers;

use App\Models\Project;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class ProjectObserver
{
    /**
     * Handle the Project "creating" event.
     */
    public function creating(Project $project): void
    {
        // Generate slug from title if empty
        if (empty($project->slug) && !empty($project->title)) {
            $project->slug = $this->generateUniqueSlug($project->title);
        }
        
        // Set default values
        $this->setDefaults($project);
        
        // Ensure categories array
        $this->ensureArrayFields($project);
    }

    /**
     * Handle the Project "created" event.
     */
    public function created(Project $project): void
    {
        Log::info('Project created', [
            'id' => $project->id,
            'title' => $project->title,
            'slug' => $project->slug,
            'type' => $project->type
        ]);
        
        // Clear cache
        cache()->forget('projects.list');
        cache()->forget('projects.featured');
        cache()->forget('projects.categories');
    }

    /**
     * Handle the Project "updating" event.
     */
    public function updating(Project $project): void
    {
        // Delete old featured image if changed
        if ($project->isDirty('featured_img')) {
            $this->deleteOldFile($project->getOriginal('featured_img'));
        }
        
        // Delete old project images if changed
        if ($project->isDirty('project_imgs')) {
            $this->deleteOldImages($project->getOriginal('project_imgs'));
        }
        
        // Regenerate slug if title changed and slug not manually set
        if ($project->isDirty('title') && $project->slug === Str::slug($project->getOriginal('title'))) {
            $project->slug = $this->generateUniqueSlug($project->title, $project->id);
        }
        
        // Ensure categories array
        $this->ensureArrayFields($project);
    }

    /**
     * Handle the Project "updated" event.
     */
    public function updated(Project $project): void
    {
        Log::info('Project updated', [
            'id' => $project->id,
            'changes' => $project->getChanges()
        ]);
        
        // Clear cache
        cache()->forget('projects.list');
        cache()->forget('project.' . $project->slug);
        
        // If categories changed
        if ($project->isDirty('categories')) {
            cache()->forget('projects.categories');
        }
        
        // If type changed
        if ($project->isDirty('type')) {
            cache()->forget('projects.by_type');
        }
    }

    /**
     * Handle the Project "deleting" event.
     */
    public function deleting(Project $project): void
    {
        // Store file paths for deletion
        $project->setAttribute('_deleting_files', [
            'featured_img' => $project->featured_img,
            'project_imgs' => $project->project_imgs
        ]);
    }

    /**
     * Handle the Project "deleted" event.
     */
    public function deleted(Project $project): void
    {
        // Get stored file paths
        $files = $project->getAttribute('_deleting_files');
        
        // Delete featured image
        if (!empty($files['featured_img'])) {
            $this->deleteFile($files['featured_img']);
        }
        
        // Delete project images
        if (!empty($files['project_imgs']) && is_array($files['project_imgs'])) {
            $this->deleteImages($files['project_imgs']);
        }
        
        Log::info('Project deleted', [
            'id' => $project->id,
            'title' => $project->title
        ]);
        
        // Clear cache
        cache()->forget('projects.list');
        cache()->forget('projects.categories');
        cache()->forget('projects.by_type');
    }

    /**
     * Handle the Project "saving" event.
     */
    public function saving(Project $project): void
    {
        // Trim fields
        $this->trimFields($project);
        
        // Sanitize content
        if (!empty($project->content_section_1)) {
            $project->content_section_1 = $this->sanitizeContent($project->content_section_1);
        }
        
        if (!empty($project->content_section_2)) {
            $project->content_section_2 = $this->sanitizeContent($project->content_section_2);
        }
        
        // Set project URL
        // $project->setAttribute('url', route('projects.show', $project->slug));
    }

    /**
     * Generate unique slug.
     */
    private function generateUniqueSlug(string $title, ?int $excludeId = null): string
    {
        $slug = Str::slug($title);
        $originalSlug = $slug;
        $count = 1;

        while (Project::where('slug', $slug)
            ->when($excludeId, fn($q) => $q->where('id', '!=', $excludeId))
            ->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        return $slug;
    }

    /**
     * Set default values.
     */
    private function setDefaults(Project $project): void
    {
        // Set default type
        if (empty($project->type)) {
            $project->type = 'website';
        }
        
        // Set owner if empty
        if (empty($project->owner)) {
            $project->owner = auth()->user()?->name ?? 'Admin';
        }
    }

    /**
     * Ensure categories is array.
     */
    private function ensureArrayFields(Project $project): void
    {
        // Categories
        if (!empty($project->categories) && is_string($project->categories)) {
            $project->categories = explode(',', $project->categories);
        }
        
        if (is_array($project->categories)) {
            $project->categories = array_unique(array_filter($project->categories));
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
     * Trim fields.
     */
    private function trimFields(Project $project): void
    {
        $fields = [
            'title', 'short_description', 'client_name', 
            'industry', 'region', 'project_duration', 'website'
        ];
        
        foreach ($fields as $field) {
            if (!empty($project->{$field}) && is_string($project->{$field})) {
                $project->{$field} = trim($project->{$field});
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