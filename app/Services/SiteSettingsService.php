<?php

namespace App\Services;

use App\Models\SiteSetting;
use Illuminate\Support\Facades\Cache;

class SiteSettingsService
{
    protected static $settings = null;

    public static function get($key, $default = null)
    {
        if (self::$settings === null) {
            self::$settings = Cache::remember('site_settings', 3600, function () {
                return SiteSetting::all()->pluck('value', 'key')->toArray();
            });
        }

        return self::$settings[$key] ?? $default;
    }

    public static function group($group)
    {
        return Cache::remember("site_settings_group_{$group}", 3600, function () use ($group) {
            return SiteSetting::where('group', $group)
                ->get()
                ->mapWithKeys(function ($item) {
                    return [$item->key => self::castValue($item->value, $item->type)];
                })
                ->toArray();
        });
    }

    public static function castValue($value, $type)
    {
        return match ($type) {
            'boolean' => (bool) $value,
            'number' => (int) $value,
            'multiple_images' => json_decode($value, true) ?? [],
            default => $value,
        };
    }

    public static function clearCache()
    {
        Cache::forget('site_settings');
        
        // Clear all group caches
        $groups = SiteSetting::distinct()->pluck('group');
        foreach ($groups as $group) {
            Cache::forget("site_settings_group_{$group}");
        }
    }
}