<?php
// app/Http/Controllers/SalaryGuideController.php

namespace App\Http\Controllers;

use App\Models\SalaryGuide;
use App\Models\ExperienceLevel;
use App\Models\Currency;
use Illuminate\Http\Request;

class SalaryGuideController extends Controller
{
    /**
     * Display the salary guide page.
     */
    public function index()
    {
        // Get all active data
        $experienceLevels = ExperienceLevel::orderBy('order')->get();
        $salaryGuides = SalaryGuide::where('is_active', true)
            ->with(['salaryRates.experienceLevel'])
            ->orderBy('order')
            ->get();
        $currencies = Currency::where('is_active', true)
            ->orderBy('order')
            ->get();
        
        // Calculate converted rates
        $salaryData = [];
        foreach ($salaryGuides as $guide) {
            $guideRates = [];
            foreach ($experienceLevels as $level) {
                $rate = $guide->salaryRates->where('experience_level_id', $level->id)->first();
                if ($rate) {
                    $convertedRates = [];
                    foreach ($currencies as $currency) {
                        $exchangeRate = $currency->exchange_rate;
                        $min = round($rate->min_rate * $exchangeRate);
                        $max = round($rate->max_rate * $exchangeRate);
                        
                        $convertedRates[$currency->code] = [
                            'min' => $this->formatNumber($min),
                            'max' => $this->formatNumber($max),
                            'symbol' => $currency->symbol,
                            'label' => $currency->label,
                        ];
                    }
                    
                    $guideRates[] = [
                        'level' => $level->name,
                        'description' => $level->description,
                        'php_rate' => [
                            'min' => $this->formatNumber($rate->min_rate),
                            'max' => $this->formatNumber($rate->max_rate),
                            'formatted' => '₱' . $this->formatNumber($rate->min_rate) . ' - ₱' . $this->formatNumber($rate->max_rate)
                        ],
                        'converted_rates' => $convertedRates,
                    ];
                }
            }
            
            $salaryData[] = [
                'role' => $guide->role,
                'rates' => $guideRates,
            ];
        }
        
        return view('pages.salary-guide.index', compact('salaryData')
            + compact('experienceLevels')
            + compact('currencies')            
            );
    }
    
    /**
     * API endpoint for salary guide data.
     */
    public function apiIndex()
    {
        $experienceLevels = ExperienceLevel::orderBy('order')->get();
        $salaryGuides = SalaryGuide::where('is_active', true)
            ->with(['salaryRates.experienceLevel'])
            ->orderBy('order')
            ->get();
        $currencies = Currency::where('is_active', true)
            ->orderBy('order')
            ->get();
        
        return response()->json([
            'experience_levels' => $experienceLevels,
            'currencies' => $currencies,
            'salary_guides' => $salaryGuides,
        ]);
    }
    
    /**
     * Format number with commas.
     */
    private function formatNumber($number)
    {
        return number_format($number, 0, '.', ',');
    }
}