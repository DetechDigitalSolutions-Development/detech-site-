<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Career extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_title',
        'job_type',
        'job_location',
        'job_category',
        'job_content',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];

    /**
     * Get all unique job categories from the database
     */
    public static function getCategories(): array
    {
        return self::distinct()
            ->whereNotNull('job_category')
            ->where('job_category', '!=', '')
            ->orderBy('job_category')
            ->pluck('job_category')
            ->toArray();
    }

    /**
     * Get categories as key-value pairs for selects
     */
    public static function getCategoryOptions(): array
    {
        return self::distinct()
            ->whereNotNull('job_category')
            ->where('job_category', '!=', '')
            ->orderBy('job_category')
            ->pluck('job_category', 'job_category')
            ->toArray();
    }
}