<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class SiteSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'value',
        'type',
        'group',
        'description',
    ];

    protected $casts = [
        'value' => 'string',
    ];

    protected $appends = [
        'decoded_images',
        'boolean_value',
        'image_url',
        'image_urls',
        'file_url',
    ];

    /**
     * Get setting value by key
     */
    public static function getValue($key, $default = null)
    {
        // Try to get from cache first for better performance
        return Cache::remember('setting_'.$key, 3600, function () use ($key, $default) {
            $setting = self::where('key', $key)->first();

            return $setting ? $setting->value : $default;
        });
    }

    /**
     * Set setting value by key
     */
    public static function setValue($key, $value)
    {
        $setting = self::updateOrCreate(
            ['key' => $key],
            ['value' => $value]
        );

        // Clear cache for this setting
        Cache::forget('setting_'.$key);

        return $setting;
    }

    /**
     * Get boolean value from setting
     */
    public static function getBoolean($key, $default = false)
    {
        $value = self::getValue($key, $default);

        return filter_var($value, FILTER_VALIDATE_BOOLEAN);
    }

    /**
     * Get all settings as array
     */
    public static function getAllSettings()
    {
        return Cache::remember('all_settings', 3600, function () {
            return self::all()->pluck('value', 'key')->toArray();
        });
    }

    /**
     * Get decoded JSON value
     */
    public static function getJson($key, $default = [])
    {
        $value = self::getValue($key);

        if (empty($value)) {
            return $default;
        }

        try {
            $decoded = json_decode($value, true);

            return is_array($decoded) ? $decoded : $default;
        } catch (\Exception $e) {
            return $default;
        }
    }

    /**
     * Get multiple images array
     */
    public static function getImages($key)
    {
        $value = self::getValue($key, '[]');

        try {
            $images = json_decode($value, true);

            if (is_array($images)) {
                // Process each image to ensure proper URLs
                return array_map(function ($image) {
                    if (is_string($image)) {
                        // If it's just a string path
                        return [
                            'path' => asset('storage/'.$image),
                            'filename' => basename($image),
                        ];
                    } elseif (is_array($image) && isset($image['path'])) {
                        // If it's already an array with path
                        return [
                            'path' => $image['path'],
                            'filename' => $image['filename'] ?? basename($image['path']),
                            'uploaded_at' => $image['uploaded_at'] ?? null,
                        ];
                    }

                    return $image;
                }, $images);
            }
        } catch (\Exception $e) {
            // Log error if needed
            // \Log::error("Error decoding images for setting {$key}: " . $e->getMessage());
        }

        return [];
    }

    /**
     * Clear all settings cache
     */
    public static function clearCache()
    {
        Cache::forget('all_settings');

        // Clear individual setting caches
        self::all()->each(function ($setting) {
            Cache::forget('setting_'.$setting->key);
        });
    }

    /**
     * The "booted" method of the model.
     */
    protected static function booted(): void
    {
        // Clear cache when settings are saved or deleted
        static::saved(function () {
            self::clearCache();
        });

        static::deleted(function () {
            self::clearCache();
        });
    }

    /**
     * Accessor for decoded images
     */
    public function getDecodedImagesAttribute()
    {
        if ($this->type === 'multiple_images') {
            try {
                $decoded = json_decode($this->value, true);

                return is_array($decoded) ? $decoded : [];
            } catch (\Exception $e) {
                return [];
            }
        }

        return [];
    }

    /**
     * Accessor for boolean value
     */
    public function getBooleanValueAttribute()
    {
        if ($this->type === 'boolean') {
            return $this->value === '1' || $this->value === 1 || $this->value === true;
        }

        return null;
    }

    /**
     * Accessor for image URL
     */
    public function getImageUrlAttribute()
    {
        if ($this->type === 'image' && $this->value) {
            return asset('storage/'.$this->value);
        }

        return null;
    }

    /**
     * Accessor for multiple image URLs
     */
    public function getImageUrlsAttribute()
    {
        if ($this->type === 'multiple_images') {
            $urls = [];
            $images = $this->decoded_images;

            foreach ($images as $image) {
                if (is_string($image)) {
                    $urls[] = Storage::disk('public')->url($image);
                } elseif (is_array($image) && isset($image['path'])) {
                    $urls[] = $image['path'];
                }
            }

            return $urls;
        }

        return [];
    }

    /**
     * Accessor for file URL
     */
    public function getFileUrlAttribute()
    {
        if ($this->type === 'file' && $this->value) {
            return Storage::disk('public')->url($this->value);
        }

        return null;
    }

    /**
     * Helper to check if setting exists
     */
    public static function has($key): bool
    {
        return self::where('key', $key)->exists();
    }

    /**
     * Get setting with fallback to config
     */
    public static function getWithFallback($key, $configKey = null, $default = null)
    {
        $value = self::getValue($key);

        if ($value === null && $configKey !== null) {
            $value = config($configKey, $default);
        }

        return $value ?? $default;
    }

    /**
     * Get file information
     */
    public static function getFileInfo($key)
    {
        $value = self::getValue($key);

        if (empty($value)) {
            return null;
        }

        return [
            'path' => $value,
            'url' => Storage::disk('public')->url($value),
            'filename' => basename($value),
            'extension' => pathinfo($value, PATHINFO_EXTENSION),
            'size' => Storage::disk('public')->exists($value)
                ? Storage::disk('public')->size($value)
                : null,
        ];
    }

    /**
     * Check if setting is a file and get its URL
     */
    public static function getFileUrl($key)
    {
        $setting = self::where('key', $key)->first();

        if ($setting && $setting->type === 'file' && $setting->value) {
            return Storage::disk('public')->url($setting->value);
        }

        return null;
    }
}
