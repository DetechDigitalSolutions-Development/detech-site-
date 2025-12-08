<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'name',
        'email',
        'service',
        'message',
        'read',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'read' => 'boolean',
    ];

    /**
     * Scope a query to only include unread appointments.
     */
    public function scopeUnread($query)
    {
        return $query->where('read', false);
    }

    /**
     * Scope a query to only include read appointments.
     */
    public function scopeRead($query)
    {
        return $query->where('read', true);
    }

    /**
     * Mark the appointment as read.
     */
    public function markAsRead()
    {
        $this->update(['read' => true]);
    }

    /**
     * Mark the appointment as unread.
     */
    public function markAsUnread()
    {
        $this->update(['read' => false]);
    }
}