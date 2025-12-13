<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PricingPlan extends Model
{
    protected $fillable = [
        'name',
        'short_description',
        'price',
        'currency_symbol',
        'billing_type',
        'is_active',
        'is_highlighted',
        'sort_order',
        'features',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'is_active' => 'boolean',
        'is_highlighted' => 'boolean',
        'features' => 'array',
        'sort_order' => 'integer',
    ];

    /**
     * Scope for active plans
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope for highlighted plans
     */
    public function scopeHighlighted($query)
    {
        return $query->where('is_highlighted', true);
    }

    /**
     * Scope ordered by sort order
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('created_at');
    }

    /**
     * Get the full price with currency
     */
    public function getFormattedPriceAttribute()
    {
        return $this->currency_symbol . number_format($this->price, 2);
    }

    /**
     * Get billing period text
     */
    public function getBillingPeriodAttribute()
    {
        return match($this->billing_type) {
            'monthly' => '/Monthly',
            'yearly' => '/Yearly',
            'both' => '/Monthly',
            default => '',
        };
    }

    /**
     * Get yearly price if applicable
     */
    public function getYearlyPriceAttribute()
    {
        if ($this->billing_type === 'yearly' || $this->billing_type === 'both') {
            return $this->currency_symbol . number_format($this->price * 12, 2);
        }
        return null;
    }
}