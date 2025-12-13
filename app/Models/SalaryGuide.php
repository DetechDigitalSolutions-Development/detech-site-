<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalaryGuide extends Model
{
    use HasFactory;

    protected $fillable = ['role', 'slug', 'order', 'is_active'];
    
    public function salaryRates()
    {
        return $this->hasMany(SalaryRate::class);
    }
    
    public function getSalaryForLevel($experienceLevelId)
    {
        return $this->salaryRates()->where('experience_level_id', $experienceLevelId)->first();
    }
}
