<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'user_name',
        'user_email',
        'blog_id',
        'comment_text',
        'is_approved',
        'reply_id',
    ];

    /**
     * A comment belongs to a blog post.
     */
    public function blog(): BelongsTo
    {
        return $this->belongsTo(Blog::class);
    }

    /**
     * A comment can be a reply to another comment.
     */
    public function parentComment(): BelongsTo
    {
        return $this->belongsTo(Comment::class, 'reply_id');
    }

    /**
     * A comment can have multiple replies.
     */
    public function replies(): HasMany
    {
        return $this->hasMany(Comment::class, 'reply_id')->orderBy('created_at', 'desc');
    }

    /**
     * Get all top-level comments for a post.
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class)->whereNull('reply_id');
    }

    /**
     * Resolve a comment by its ID for route model binding.
     */
    public function resolveRouteBinding($value, $field = null)
    {
        return $this->where('id', $value)->firstOrFail();
    }
}
