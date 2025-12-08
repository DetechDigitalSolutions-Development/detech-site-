<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Career;

class CareerSeeder extends Seeder
{
    public function run(): void
    {
        Career::create([
            'job_title' => 'Full-Stack Software Engineer (In House)',
            'job_type' => 'onsite',
            'job_location' => 'Jaffna',
            'job_category' => 'Software Engineering',
            'job_content' => 'We are looking for a skilled Full-Stack Developer...',
            'is_active' => true
        ]);
        
        // Add more sample data
    }
}