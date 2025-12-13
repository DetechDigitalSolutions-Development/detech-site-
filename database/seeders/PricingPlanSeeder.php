<?php

namespace Database\Seeders;

use App\Models\PricingPlan;
use Illuminate\Database\Seeder;

class PricingPlanSeeder extends Seeder
{
    public function run(): void
    {
        $plans = [
            [
                'name' => 'Basic',
                'short_description' => 'Pricing plan for Digital Transformation',
                'price' => 29.00,
                'currency_symbol' => '$',
                'billing_type' => 'both',
                'is_active' => true,
                'is_highlighted' => false,
                'sort_order' => 1,
                'features' => [
                    ['feature' => 'Community Support'],
                    ['feature' => 'Dedicated Tech Experts'],
                    ['feature' => 'Unlimited Storage'],
                    ['feature' => 'Custom Domains'],
                    ['feature' => '24/7 system monitoring'],
                ],
            ],
            [
                'name' => 'Standard',
                'short_description' => 'Pricing plan for Digital Transformation',
                'price' => 69.00,
                'currency_symbol' => '$',
                'billing_type' => 'both',
                'is_active' => true,
                'is_highlighted' => true,
                'sort_order' => 2,
                'features' => [
                    ['feature' => 'Community Support'],
                    ['feature' => 'Dedicated Tech Experts'],
                    ['feature' => 'Unlimited Storage'],
                    ['feature' => 'Custom Domains'],
                    ['feature' => '24/7 system monitoring'],
                ],
            ],
            [
                'name' => 'Premium',
                'short_description' => 'Pricing plan for Digital Transformation',
                'price' => 119.00,
                'currency_symbol' => '$',
                'billing_type' => 'both',
                'is_active' => true,
                'is_highlighted' => false,
                'sort_order' => 3,
                'features' => [
                    ['feature' => 'Community Support'],
                    ['feature' => 'Dedicated Tech Experts'],
                    ['feature' => 'Unlimited Storage'],
                    ['feature' => 'Custom Domains'],
                    ['feature' => '24/7 system monitoring'],
                ],
            ],
        ];

        foreach ($plans as $plan) {
            PricingPlan::create($plan);
        }
    }
}