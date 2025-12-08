<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Seeder;

class SiteSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            // Contact Information
            [
                'key' => 'company_tel_no',
                'value' => '+1 (555) 123-4567',
                'type' => 'text',
                'group' => 'contact',
                'description' => 'Company telephone number',
            ],
            [
                'key' => 'company_email',
                'value' => 'contact@company.com',
                'type' => 'email',
                'group' => 'contact',
                'description' => 'Company primary email address',
            ],
            [
                'key' => 'company_address',
                'value' => '123 Business Street, City, Country 12345',
                'type' => 'textarea',
                'group' => 'contact',
                'description' => 'Company physical address',
            ],

            // Social Media Links
            [
                'key' => 'company_linkedin',
                'value' => 'https://linkedin.com/company/yourcompany',
                'type' => 'url',
                'group' => 'social',
                'description' => 'LinkedIn company profile URL',
            ],
            [
                'key' => 'github',
                'value' => 'https://github.com/yourcompany',
                'type' => 'url',
                'group' => 'social',
                'description' => 'GitHub organization/profile URL',
            ],
            [
                'key' => 'facebook',
                'value' => 'https://facebook.com/yourcompany',
                'type' => 'url',
                'group' => 'social',
                'description' => 'Facebook page URL',
            ],
            [
                'key' => 'youtube',
                'value' => 'https://youtube.com/yourcompany',
                'type' => 'url',
                'group' => 'social',
                'description' => 'YouTube channel URL',
            ],
            [
                'key' => 'instagram',
                'value' => 'https://instagram.com/yourcompany',
                'type' => 'url',
                'group' => 'social',
                'description' => 'Instagram profile URL',
            ],
            [
                'key' => 'twitter',
                'value' => 'https://twitter.com/yourcompany',
                'type' => 'url',
                'group' => 'social',
                'description' => 'Twitter/X profile URL',
            ],

            // Career Page Settings
            [
                'key' => 'career_page_enabled',
                'value' => '1',
                'type' => 'boolean',
                'group' => 'career',
                'description' => 'Enable/disable career page on website',
            ],
            [
                'key' => 'career_page_title',
                'value' => 'Join Our Team',
                'type' => 'text',
                'group' => 'career',
                'description' => 'Title for career page',
            ],
            [
                'key' => 'career_page_description',
                'value' => 'Discover exciting career opportunities and grow with us.',
                'type' => 'textarea',
                'group' => 'career',
                'description' => 'Description for career page',
            ],
            [
                'key' => 'career_contact_email',
                'value' => 'careers@company.com',
                'type' => 'email',
                'group' => 'career',
                'description' => 'Email for career inquiries',
            ],

            // General Settings
            [
                'key' => 'site_name',
                'value' => 'Your Company Name',
                'type' => 'text',
                'group' => 'general',
                'description' => 'Website/company name',
            ],
            [
                'key' => 'site_description',
                'value' => 'A brief description of your company',
                'type' => 'textarea',
                'group' => 'general',
                'description' => 'Website meta description',
            ],
            [
                'key' => 'site_logo_url',
                'value' => '/images/logo.png',
                'type' => 'text',
                'group' => 'general',
                'description' => 'Path to website logo',
            ],
            [
                'key' => 'client_company_logos',
                'value' => json_encode([]), // Will be populated with uploaded images
                'type' => 'multiple_images',
                'group' => 'clients',
                'description' => 'Upload client company logos to display on the website',
            ],
        ];

        foreach ($settings as $setting) {
            SiteSetting::updateOrCreate(
                ['key' => $setting['key']],
                $setting
            );
        }

        $this->command->info('Site settings seeded successfully!');
    }
}
