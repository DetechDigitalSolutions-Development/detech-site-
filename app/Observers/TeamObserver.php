<?php

namespace App\Observers;

use App\Models\Team;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class TeamObserver
{
    /**
     * Handle the Team "creating" event.
     */
    public function creating(Team $team): void
    {
        // Set default year of experience if empty
        if (empty($team->year_of_exp)) {
            $team->year_of_exp = 0;
        }
        
        // Ensure skills is properly formatted
        $this->formatSkills($team);
    }

    /**
     * Handle the Team "created" event.
     */
    public function created(Team $team): void
    {
        Log::info('Team member created', [
            'id' => $team->id,
            'name' => $team->name,
            'designation' => $team->designation
        ]);
        
        // Clear cache
        cache()->forget('team.list');
        cache()->forget('team.active');
    }

    /**
     * Handle the Team "updating" event.
     */
    public function updating(Team $team): void
    {
        // Delete old profile image if changed
        if ($team->isDirty('profile_img')) {
            $this->deleteOldFile($team->getOriginal('profile_img'));
        }
        
        // Format skills
        $this->formatSkills($team);
        
        // Validate social URLs
        $this->validateSocialUrls($team);
    }

    /**
     * Handle the Team "updated" event.
     */
    public function updated(Team $team): void
    {
        Log::info('Team member updated', [
            'id' => $team->id,
            'changes' => $team->getChanges()
        ]);
        
        // Clear cache
        cache()->forget('team.list');
        cache()->forget('team.' . $team->id);
    }

    /**
     * Handle the Team "deleting" event.
     */
    public function deleting(Team $team): void
    {
        // Store profile image for deletion
        $team->setAttribute('_deleting_profile_img', $team->profile_img);
    }

    /**
     * Handle the Team "deleted" event.
     */
    public function deleted(Team $team): void
    {
        // Delete profile image
        $profileImg = $team->getAttribute('_deleting_profile_img');
        if (!empty($profileImg)) {
            $this->deleteFile($profileImg);
        }
        
        Log::info('Team member deleted', [
            'id' => $team->id,
            'name' => $team->name
        ]);
        
        // Clear cache
        cache()->forget('team.list');
    }

    /**
     * Handle the Team "saving" event.
     */
    public function saving(Team $team): void
    {
        // Trim all string fields
        $this->trimFields($team);
        
        // Generate email if empty but e_mail provided
        if (empty($team->e_mail) && !empty($team->e_mail)) {
            $team->e_mail = $team->e_mail;
        }
        
        // Generate initials for avatar if no profile image
        // if (empty($team->profile_img) && !empty($team->name)) {
        //     $team->setAttribute('initials', $this->generateInitials($team->name));
        // }
    }

    /**
     * Format skills field.
     */
    private function formatSkills(Team $team): void
    {
        if (is_string($team->skills)) {
            try {
                $skills = json_decode($team->skills, true);
                if (json_last_error() === JSON_ERROR_NONE) {
                    $team->skills = $skills;
                }
            } catch (\Exception $e) {
                $team->skills = [];
            }
        }
        
        if (!is_array($team->skills)) {
            $team->skills = [];
        }
    }

    /**
     * Validate social media URLs.
     */
    private function validateSocialUrls(Team $team): void
    {
        $socialFields = ['fb_url', 'linkedin_url', 'x_url', 'insta_url'];
        
        foreach ($socialFields as $field) {
            if (!empty($team->{$field})) {
                // Remove trailing slashes
                $team->{$field} = rtrim($team->{$field}, '/');
                
                // Ensure it's a valid URL
                if (!filter_var($team->{$field}, FILTER_VALIDATE_URL)) {
                    $team->{$field} = null;
                }
            }
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
    private function trimFields(Team $team): void
    {
        $fields = [
            'name', 'designation', 'tel_no', 'e_mail',
            'fb_url', 'linkedin_url', 'x_url', 'insta_url',
            'summery', 'short_bio', 'about_me', 'skill_summary'
        ];
        
        foreach ($fields as $field) {
            if (!empty($team->{$field}) && is_string($team->{$field})) {
                $team->{$field} = trim($team->{$field});
            }
        }
    }

    /**
     * Generate initials from name.
     */
    private function generateInitials(string $name): string
    {
        $words = explode(' ', $name);
        $initials = '';
        
        foreach ($words as $word) {
            if (!empty($word)) {
                $initials .= strtoupper($word[0]);
                if (strlen($initials) >= 2) break;
            }
        }
        
        return $initials;
    }
}