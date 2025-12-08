<?php

namespace App\Filament\Resources\SiteSettingResource\Pages;

use App\Filament\Resources\SiteSettingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSiteSetting extends EditRecord
{
    protected static string $resource = SiteSettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        // Convert stored values for proper form display
        if ($data['type'] === 'boolean') {
            $data['value'] = $data['value'] === '1' || $data['value'] === 1 || $data['value'] === true;
        }
        
        if ($data['type'] === 'multiple_images' && isset($data['value']) && is_string($data['value'])) {
            try {
                $decoded = json_decode($data['value'], true);
                $data['value'] = is_array($decoded) ? $decoded : [];
            } catch (\Exception $e) {
                $data['value'] = [];
            }
        }
        
        return $data;
    }

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