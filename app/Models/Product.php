<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'title',
        'short_description',
        'featured_img',
        'content_section_1',
        'content_section_2',
        'product_imgs',
        'challenge_title',
        'challenge_points',
        'client_name',
        'start_date',
        'end_date',
        'owner',
        'categories',
        'website',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'product_imgs' => 'array',
        'categories' => 'array',
        'challenge_points' => 'array',
    ];
}
