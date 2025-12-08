<?php

namespace App\Filament\Forms\Components;

use Filament\Forms\Components\FileUpload;
use Illuminate\Support\Facades\Storage;

class ClientLogosUpload extends FileUpload
{
    protected function setUp(): void
    {
        parent::setUp();
        
        $this->image()
            ->multiple()
            ->directory('site-settings/client-logos')
            ->maxFiles(20)
            ->maxSize(1024)
            ->imageResizeMode('contain')
            ->imageResizeTargetWidth('200')
            ->imageResizeTargetHeight('100')
            ->panelLayout('grid')
            ->reorderable()
            ->dehydrated(false)
            ->afterStateHydrated(function ($component, $record) {
                if ($record && $record->value) {
                    try {
                        $logos = json_decode($record->value, true);
                        if (is_array($logos) && !empty($logos)) {
                            $paths = [];
                            foreach ($logos as $logo) {
                                if (isset($logo['path'])) {
                                    $path = str_replace(Storage::url(''), '', $logo['path']);
                                    $paths[] = $path;
                                }
                            }
                            $component->state($paths);
                        }
                    } catch (\Exception $e) {
                        // Do nothing
                    }
                }
            })
            ->afterStateUpdated(function ($state, callable $set, $record) {
                $existingLogos = [];
                
                // Get existing logos
                if ($record && $record->value) {
                    try {
                        $existingLogos = json_decode($record->value, true) ?? [];
                    } catch (\Exception $e) {
                        $existingLogos = [];
                    }
                }
                
                // Add new logos
                if (!empty($state)) {
                    foreach ($state as $storagePath) {
                        $existingLogos[] = [
                            'path' => Storage::url($storagePath),
                            'filename' => basename($storagePath),
                            'uploaded_at' => now()->toDateTimeString(),
                        ];
                    }
                }
                
                // Update the value
                $set('value', json_encode($existingLogos));
            });
    }
}