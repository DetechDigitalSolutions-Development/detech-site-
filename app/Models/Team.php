<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use RalphJSmit\Laravel\SEO\Support\HasSEO;

class Team extends Model
{
    use HasFactory;
    use HasSEO;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'name',
        'designation',
        'profile_img',
        'year_of_exp',
        'tel_no',
        'e_mail',
        'fb_url',
        'linkedin_url',
        'x_url',
        'insta_url',
        'summery',
        'short_bio',
        'about_me',
        'skill_summary',
        'skills',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'skills' => 'array',
    ];
}
