<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalaryRate extends Model
{
    use HasFactory;

    protected $fillable = ['salary_guide_id', 'experience_level_id', 'min_rate', 'max_rate'];
    
    protected $casts = [
        'min_rate' => 'decimal:2',
        'max_rate' => 'decimal:2',
    ];
    
    public function salaryGuide()
    {
        return $this->belongsTo(SalaryGuide::class);
    }
    
    public function experienceLevel()
    {
        return $this->belongsTo(ExperienceLevel::class);
    }
    
    public function getRateInCurrency($currencyCode, $exchangeRate)
    {
        $min = $this->min_rate * $exchangeRate;
        $max = $this->max_rate * $exchangeRate;
        
        return [
            'min' => number_format($min, 0),
            'max' => number_format($max, 0),
        ];
    }
}