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
        
        // Get base currency (first in order)
        $baseCurrency = $currencies->first();
        $baseCurrencyCode = $baseCurrency ? $baseCurrency->code : 'PHP';
        $baseCurrencySymbol = $baseCurrency ? $baseCurrency->symbol : '₱';
        $baseCurrencyLabel = $baseCurrency ? $baseCurrency->label : 'Philippine Peso';
        
        // Calculate converted rates
        $salaryData = [];
        foreach ($salaryGuides as $guide) {
            $guideRates = [];
            foreach ($experienceLevels as $level) {
                $rate = $guide->salaryRates->where('experience_level_id', $level->id)->first();
                if ($rate) {
                    $convertedRates = [];
                    
                    // Store base currency rate (rate in PHP from database)
                    $phpMin = $rate->min_rate;
                    $phpMax = $rate->max_rate;
                    
                    foreach ($currencies as $currency) {
                        if ($currency->code === $baseCurrencyCode) {
                            // This is the base currency - use direct values
                            $min = round($phpMin);
                            $max = round($phpMax);
                        } else {
                            // Convert from PHP to target currency
                            // If exchange_rate is PHP to target, multiply; if target to PHP, divide
                            // Assuming exchange_rate is target currency per 1 PHP
                            $exchangeRate = $currency->exchange_rate;
                            $min = round($phpMin * $exchangeRate);
                            $max = round($phpMax * $exchangeRate);
                        }
                        
                        $convertedRates[$currency->code] = [
                            'min' => $this->formatNumber($min),
                            'max' => $this->formatNumber($max),
                            'symbol' => $currency->symbol,
                            'label' => $currency->label,
                            'is_base' => $currency->code === $baseCurrencyCode,
                            'exchange_rate' => $currency->exchange_rate,
                        ];
                    }
                    
                    $guideRates[] = [
                        'level' => $level->name,
                        'description' => $level->description,
                        'base_rate' => [
                            'min' => $this->formatNumber($phpMin),
                            'max' => $this->formatNumber($phpMax),
                            'formatted' => $baseCurrencySymbol . $this->formatNumber($phpMin) . ' - ' . $baseCurrencySymbol . $this->formatNumber($phpMax),
                            'currency_code' => $baseCurrencyCode,
                            'currency_label' => $baseCurrencyLabel,
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
        
        return view('pages.salary-guide.index', compact(
            'salaryData',
            'experienceLevels',
            'currencies',
            'baseCurrencyCode',
            'baseCurrencySymbol',
            'baseCurrencyLabel'
        ));
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
        
        // Get base currency
        $baseCurrency = $currencies->first();
        
        return response()->json([
            'experience_levels' => $experienceLevels,
            'currencies' => $currencies,
            'salary_guides' => $salaryGuides,
            'base_currency' => $baseCurrency,
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