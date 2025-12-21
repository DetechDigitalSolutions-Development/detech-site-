<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'service',
        'message',
        'read',
    ];

    protected $casts = [
        'read' => 'boolean',
        'created_at' => 'datetime',
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
     * Scope a query to only include today's appointments.
     */
    public function scopeToday($query)
    {
        return $query->whereDate('created_at', today());
    }

    /**
     * Scope a query to only include this week's appointments.
     */
    public function scopeThisWeek($query)
    {
        return $query->whereBetween('created_at', [
            now()->startOfWeek(),
            now()->endOfWeek()
        ]);
    }

    /**
     * Get appointment statistics.
     */
    public static function getStatistics()
    {
        return [
            'total' => self::count(),
            'unread' => self::unread()->count(),
            'today' => self::today()->count(),
            'this_week' => self::thisWeek()->count(),
        ];
    }

    /**
     * Mark the appointment as read.
     */
    public function markAsRead()
    {
        $this->update(['read' => true]);
        return $this;
    }

    /**
     * Mark the appointment as unread.
     */
    public function markAsUnread()
    {
        $this->update(['read' => false]);
        return $this;
    }

    /**
     * Get formatted reference ID.
     */
    public function getReferenceIdAttribute()
    {
        return 'APP' . str_pad($this->id, 6, '0', STR_PAD_LEFT);
    }
}