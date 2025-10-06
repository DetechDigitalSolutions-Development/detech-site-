<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;

class Blog extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'title',
        'featured_img',
        'content_section_1',
        'content_section_2',
        'blog_imgs',
        'quote_text',
        'categories',
        'tags',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'blog_imgs' => 'array',
        'categories' => 'array',
        'tags' => 'array',
    ];
}
