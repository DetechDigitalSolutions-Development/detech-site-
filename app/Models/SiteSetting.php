<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class SiteSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'value',
        'type',
        'group',
        'description'
    ];

    protected $casts = [
        'value' => 'string',
    ];

    // Add accessor for multiple images
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
    
    // Add accessor for boolean
    public function getBooleanValueAttribute()
    {
        if ($this->type === 'boolean') {
            return $this->value === '1' || $this->value === 1 || $this->value === true;
        }
        
        return null;
    }
    
    // Add accessor for image URL
    public function getImageUrlAttribute()
    {
        if ($this->type === 'image' && $this->value) {
            return Storage::disk('public')->url($this->value);
        }
        
        return null;
    }
    
    // Add accessor for multiple image URLs
    public function getImageUrlsAttribute()
    {
        if ($this->type === 'multiple_images') {
            $urls = [];
            $images = $this->decoded_images;
            
            foreach ($images as $image) {
                if (is_string($image)) {
                    $urls[] = Storage::disk('public')->url($image);
                }
            }
            
            return $urls;
        }
        
        return [];
    }
}