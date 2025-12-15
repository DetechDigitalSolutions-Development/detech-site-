<?php
// app/Helpers/SiteSettings.php

if (!function_exists('setting')) {
    /**
     * Get site setting value
     */
    function setting($key, $default = null)
    {
        return \App\Models\SiteSetting::getValue($key, $default);
    }
}

if (!function_exists('setting_bool')) {
    /**
     * Get site setting as boolean
     */
    function setting_bool($key, $default = false)
    {
        return \App\Models\SiteSetting::getBoolean($key, $default);
    }
}

if (!function_exists('getMenuItems')) {
    function getMenuItems()
    {
        $menuItems = config('menu.menuItems');
        
        // Add Careers menu item conditionally
        if (setting_bool('career_page_enabled')) {
            $menuItems[] = [
                'title' => 'Careers',
                'url' => '/careers',
                'route' => 'careers',
                'submenu' => null
            ];
        }
        
        return $menuItems;
    }
}

if (!function_exists('getLastProduct')) {
    /**
     * Get last product
     */
    function getLastProduct()
    {
        return \App\Models\Product::latest()->first();
    }
}

// function getRandomProject()
// {
//     // Change cache key every 10 seconds
//     $timeSegment = floor(time() / 10); // Changes every 10 seconds
//     $cacheKey = 'random_project_' . $timeSegment;
    
//     return cache()->remember($cacheKey, 15, function () { // 15 seconds TTL
//         return \App\Models\Project::query()
//             ->inRandomOrder()
//             ->first();
//     });
// }
function getRandomProject()
{
    // Cache for 1 hour but with daily variation
    $cacheKey = 'random_project_' . date('YmdH'); // Changes hourly
    
    return cache()->remember($cacheKey, 3600, function () {
        $projects = \App\Models\Project::all();
        
        if ($projects->isEmpty()) {
            return null;
        }
        
        // Use Laravel's random() method on collection
        return $projects->random();
    });
}