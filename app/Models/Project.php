<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    /**
     * Project types
     */
    public const TYPE_WEBSITE = 'website';
    public const TYPE_WEB_SYSTEM = 'web_system';
    public const TYPE_MOBILE_APP = 'mobile_app';
    public const TYPE_DESKTOP_APP = 'desktop_app';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'featured_img',
        'content_section_1',
        'content_section_2',
        'project_imgs',
        'client_name',
        'type',
        'industry',
        'region',
        'project_duration',
        'categories',
        'website',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'project_imgs' => 'array',
        'categories' => 'array',
    ];

    /**
     * Get the project type options.
     *
     * @return array
     */
    public static function getTypeOptions(): array
    {
        return [
            self::TYPE_WEBSITE => 'Website',
            self::TYPE_WEB_SYSTEM => 'Web System',
            self::TYPE_MOBILE_APP => 'Mobile App',
            self::TYPE_DESKTOP_APP => 'Desktop App',
        ];
    }

    /**
     * Get formatted type name.
     *
     * @return string
     */
    public function getFormattedTypeAttribute(): string
    {
        return self::getTypeOptions()[$this->type] ?? ucfirst($this->type);
    }

    /**
     * Get project duration in formatted string.
     *
     * @return string|null
     */
    public function getFormattedDurationAttribute(): ?string
    {
        if (!$this->project_duration) {
            return null;
        }

        // Handle different duration formats
        if (preg_match('/(\d+)\s*(month|year|week|day)s?/i', $this->project_duration, $matches)) {
            $number = $matches[1];
            $unit = strtolower($matches[2]);
            
            $units = [
                'day' => 'Day',
                'week' => 'Week',
                'month' => 'Month',
                'year' => 'Year',
            ];
            
            $unitFormatted = $units[$unit] ?? ucfirst($unit);
            $plural = $number > 1 ? 's' : '';
            
            return "{$number} {$unitFormatted}{$plural}";
        }

        return $this->project_duration;
    }

    /**
     * Scope for filtering by type
     */
    public function scopeOfType($query, $type)
    {
        return $query->where('type', $type);
    }

    /**
     * Scope for filtering by industry
     */
    public function scopeByIndustry($query, $industry)
    {
        return $query->where('industry', 'like', "%{$industry}%");
    }

    /**
     * Scope for filtering by region
     */
    public function scopeByRegion($query, $region)
    {
        return $query->where('region', 'like', "%{$region}%");
    }

    /**
     * Boot method for generating slug
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($project) {
            if (empty($project->slug)) {
                $project->slug = Str::slug($project->title);
                
                // Check for duplicate slugs
                $count = static::where('slug', $project->slug)->count();
                if ($count > 0) {
                    $project->slug = $project->slug . '-' . ($count + 1);
                }
            }
        });

        static::updating(function ($project) {
            if ($project->isDirty('title') && empty($project->slug)) {
                $project->slug = Str::slug($project->title);
                
                // Check for duplicate slugs
                $count = static::where('slug', $project->slug)
                    ->where('id', '!=', $project->id)
                    ->count();
                    
                if ($count > 0) {
                    $project->slug = $project->slug . '-' . time();
                }
            }
        });
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * Get project images as array with full URLs
     *
     * @return array
     */
    public function getProjectImagesAttribute(): array
    {
        if (empty($this->project_imgs)) {
            return [];
        }

        return array_map(function ($image) {
            return asset('storage/' . $image);
        }, $this->project_imgs);
    }

    /**
     * Get featured image URL
     *
     * @return string|null
     */
    public function getFeaturedImageUrlAttribute(): ?string
    {
        if (empty($this->featured_img)) {
            return null;
        }

        return asset('storage/' . $this->featured_img);
    }

    /**
     * Check if project has multiple images
     *
     * @return bool
     */
    public function getHasMultipleImagesAttribute(): bool
    {
        return !empty($this->project_imgs) && count($this->project_imgs) > 1;
    }

    /**
     * Get project categories as array
     *
     * @return array
     */
    public function getCategoriesListAttribute(): array
    {
        if (empty($this->categories)) {
            return [];
        }

        return is_array($this->categories) ? $this->categories : json_decode($this->categories, true);
    }

    /**
     * Get project metadata for SEO
     *
     * @return array
     */
    public function getMetaDataAttribute(): array
    {
        return [
            'title' => $this->title . ' - Project Case Study',
            'description' => $this->short_description ?: 
                'Explore this ' . $this->formatted_type . ' project by ' . ($this->client_name ?: 'our team'),
            'keywords' => implode(', ', array_merge(
                [$this->type, $this->industry, $this->region],
                $this->categories_list
            )),
        ];
    }
}