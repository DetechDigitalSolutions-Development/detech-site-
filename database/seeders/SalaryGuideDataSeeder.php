<?php
// database/seeders/SalaryGuideDataSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\ExperienceLevel;
use App\Models\Currency;
use App\Models\SalaryGuide;
use App\Models\SalaryRate;
use Illuminate\Support\Str;

class SalaryGuideDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing data
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        SalaryRate::truncate();
        SalaryGuide::truncate();
        Currency::truncate();
        ExperienceLevel::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        // 1. Create Experience Levels
        $experienceLevels = [
            [
                'name' => 'Probationary',
                'description' => '<6 mths',
                'order' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Junior',
                'description' => '6 mo-2 yrs exp',
                'order' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mid-level',
                'description' => '2-5 yrs exp',
                'order' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Senior',
                'description' => '5-10 yrs exp',
                'order' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($experienceLevels as $level) {
            ExperienceLevel::create($level);
        }

        // Get experience level IDs for reference
        $probationaryId = ExperienceLevel::where('name', 'Probationary')->first()->id;
        $juniorId = ExperienceLevel::where('name', 'Junior')->first()->id;
        $midLevelId = ExperienceLevel::where('name', 'Mid-level')->first()->id;
        $seniorId = ExperienceLevel::where('name', 'Senior')->first()->id;

        // 2. Create Currencies
        $currencies = [
            [
                'code' => 'PHP',
                'name' => 'Philippine Peso',
                'symbol' => '₱',
                'label' => 'RATES IN PHP',
                'is_active' => true,
                'exchange_rate' => 1.0000, // Base currency
                'order' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'AUD',
                'name' => 'Australian Dollar',
                'symbol' => 'A$',
                'label' => 'RATES IN AUD',
                'is_active' => true,
                'exchange_rate' => 0.0270, // 1 PHP = 0.027 AUD
                'order' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'USD',
                'name' => 'US Dollar',
                'symbol' => '$',
                'label' => 'RATES IN USD',
                'is_active' => true,
                'exchange_rate' => 0.0180, // 1 PHP = 0.018 USD
                'order' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($currencies as $currency) {
            Currency::create($currency);
        }

        // 3. Create Salary Guides with Rates
        $salaryGuides = [
            [
                'role' => 'General Virtual Assistant',
                'slug' => 'general-virtual-assistant',
                'order' => 1,
                'is_active' => true,
                'rates' => [
                    ['experience_level_id' => $probationaryId, 'min_rate' => 18000, 'max_rate' => 20000],
                    ['experience_level_id' => $juniorId, 'min_rate' => 20000, 'max_rate' => 25000],
                    ['experience_level_id' => $midLevelId, 'min_rate' => 25000, 'max_rate' => 35000],
                    ['experience_level_id' => $seniorId, 'min_rate' => 35000, 'max_rate' => 40000],
                ],
            ],
            [
                'role' => 'Executive Assistant',
                'slug' => 'executive-assistant',
                'order' => 2,
                'is_active' => true,
                'rates' => [
                    ['experience_level_id' => $probationaryId, 'min_rate' => 18000, 'max_rate' => 20000],
                    ['experience_level_id' => $juniorId, 'min_rate' => 20000, 'max_rate' => 25000],
                    ['experience_level_id' => $midLevelId, 'min_rate' => 25000, 'max_rate' => 35000],
                    ['experience_level_id' => $seniorId, 'min_rate' => 35000, 'max_rate' => 40000],
                ],
            ],
            [
                'role' => 'Business Administrator',
                'slug' => 'business-administrator',
                'order' => 3,
                'is_active' => true,
                'rates' => [
                    ['experience_level_id' => $probationaryId, 'min_rate' => 18000, 'max_rate' => 20000],
                    ['experience_level_id' => $juniorId, 'min_rate' => 20000, 'max_rate' => 25000],
                    ['experience_level_id' => $midLevelId, 'min_rate' => 25000, 'max_rate' => 40000],
                    ['experience_level_id' => $seniorId, 'min_rate' => 40000, 'max_rate' => 50000],
                ],
            ],
            [
                'role' => 'Marketing Coordinator',
                'slug' => 'marketing-coordinator',
                'order' => 4,
                'is_active' => true,
                'rates' => [
                    ['experience_level_id' => $probationaryId, 'min_rate' => 20000, 'max_rate' => 25000],
                    ['experience_level_id' => $juniorId, 'min_rate' => 25000, 'max_rate' => 30000],
                    ['experience_level_id' => $midLevelId, 'min_rate' => 30000, 'max_rate' => 35000],
                    ['experience_level_id' => $seniorId, 'min_rate' => 35000, 'max_rate' => 50000],
                ],
            ],
            [
                'role' => 'Social Media Manager',
                'slug' => 'social-media-manager',
                'order' => 5,
                'is_active' => true,
                'rates' => [
                    ['experience_level_id' => $probationaryId, 'min_rate' => 20000, 'max_rate' => 25000],
                    ['experience_level_id' => $juniorId, 'min_rate' => 25000, 'max_rate' => 30000],
                    ['experience_level_id' => $midLevelId, 'min_rate' => 30000, 'max_rate' => 35000],
                    ['experience_level_id' => $seniorId, 'min_rate' => 35000, 'max_rate' => 50000],
                ],
            ],
            [
                'role' => 'SEO Co-ordinator',
                'slug' => 'seo-coordinator',
                'order' => 6,
                'is_active' => true,
                'rates' => [
                    ['experience_level_id' => $probationaryId, 'min_rate' => 20000, 'max_rate' => 25000],
                    ['experience_level_id' => $juniorId, 'min_rate' => 25000, 'max_rate' => 30000],
                    // Note: From your image, Mid-level and Senior might be missing or need to be added
                ],
            ],
        ];

        foreach ($salaryGuides as $guideData) {
            // Create the salary guide
            $guide = SalaryGuide::create([
                'role' => $guideData['role'],
                'slug' => $guideData['slug'],
                'order' => $guideData['order'],
                'is_active' => $guideData['is_active'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Create salary rates for this guide
            foreach ($guideData['rates'] as $rate) {
                SalaryRate::create([
                    'salary_guide_id' => $guide->id,
                    'experience_level_id' => $rate['experience_level_id'],
                    'min_rate' => $rate['min_rate'],
                    'max_rate' => $rate['max_rate'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        // 4. Add additional sample data for SEO Co-ordinator (if needed)
        $seoGuide = SalaryGuide::where('slug', 'seo-coordinator')->first();
        if ($seoGuide) {
            // Check if mid-level and senior rates exist, if not add them
            $existingRates = $seoGuide->salaryRates->pluck('experience_level_id')->toArray();
            
            if (!in_array($midLevelId, $existingRates)) {
                SalaryRate::create([
                    'salary_guide_id' => $seoGuide->id,
                    'experience_level_id' => $midLevelId,
                    'min_rate' => 30000,
                    'max_rate' => 40000,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
            
            if (!in_array($seniorId, $existingRates)) {
                SalaryRate::create([
                    'salary_guide_id' => $seoGuide->id,
                    'experience_level_id' => $seniorId,
                    'min_rate' => 40000,
                    'max_rate' => 55000,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        // 5. Add more sample roles for completeness
        $additionalRoles = [
            [
                'role' => 'Content Writer',
                'slug' => 'content-writer',
                'order' => 7,
                'is_active' => true,
                'rates' => [
                    ['experience_level_id' => $probationaryId, 'min_rate' => 15000, 'max_rate' => 20000],
                    ['experience_level_id' => $juniorId, 'min_rate' => 20000, 'max_rate' => 25000],
                    ['experience_level_id' => $midLevelId, 'min_rate' => 25000, 'max_rate' => 35000],
                    ['experience_level_id' => $seniorId, 'min_rate' => 35000, 'max_rate' => 45000],
                ],
            ],
            [
                'role' => 'Graphic Designer',
                'slug' => 'graphic-designer',
                'order' => 8,
                'is_active' => true,
                'rates' => [
                    ['experience_level_id' => $probationaryId, 'min_rate' => 18000, 'max_rate' => 22000],
                    ['experience_level_id' => $juniorId, 'min_rate' => 22000, 'max_rate' => 28000],
                    ['experience_level_id' => $midLevelId, 'min_rate' => 28000, 'max_rate' => 38000],
                    ['experience_level_id' => $seniorId, 'min_rate' => 38000, 'max_rate' => 50000],
                ],
            ],
        ];

        foreach ($additionalRoles as $roleData) {
            $guide = SalaryGuide::create([
                'role' => $roleData['role'],
                'slug' => $roleData['slug'],
                'order' => $roleData['order'],
                'is_active' => $roleData['is_active'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            foreach ($roleData['rates'] as $rate) {
                SalaryRate::create([
                    'salary_guide_id' => $guide->id,
                    'experience_level_id' => $rate['experience_level_id'],
                    'min_rate' => $rate['min_rate'],
                    'max_rate' => $rate['max_rate'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        $this->command->info('✅ Salary Guide data seeded successfully!');
        $this->command->info('📊 Total Experience Levels: ' . ExperienceLevel::count());
        $this->command->info('💰 Total Currencies: ' . Currency::count());
        $this->command->info('👥 Total Salary Guides: ' . SalaryGuide::count());
        $this->command->info('📈 Total Salary Rate Entries: ' . SalaryRate::count());
    }
}