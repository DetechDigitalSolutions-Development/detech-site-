<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'name', 'symbol', 'label', 'is_active', 'exchange_rate', 'order'];
    
    protected $casts = [
        'is_active' => 'boolean',
        'exchange_rate' => 'decimal:4',
    ];
}
