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

if (!function_exists('getRandomProduct')) {
    /**
     * Get random product with caching
     */
    function getRandomProduct()
    {
        // Cache for 1 hour to improve performance
        return cache()->remember('random_product', 3600, function () {
            return \App\Models\Product::inRandomOrder()->first();
        });
    }
}