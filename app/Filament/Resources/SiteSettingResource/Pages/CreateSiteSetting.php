<?php

namespace App\Filament\Resources\SiteSettingResource\Pages;

use App\Filament\Resources\SiteSettingResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSiteSetting extends CreateRecord
{
    protected static string $resource = SiteSettingResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
    {
        // Handle boolean value
        if ($data['type'] === 'boolean') {
            $data['value'] = $data['value'] ? '1' : '0';
        }
        
        // Handle multiple images
        if ($data['type'] === 'multiple_images' && isset($data['value'])) {
            if (is_array($data['value'])) {
                $data['value'] = json_encode($data['value']);
            }
        }
        
        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}