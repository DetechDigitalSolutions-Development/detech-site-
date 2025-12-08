<?php

namespace App\Filament\Resources\ProductSiteResource\Pages;

use App\Filament\Resources\ProductSiteResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateProductSite extends CreateRecord
{
    protected static string $resource = ProductSiteResource::class;

    protected function afterCreate(): void
    {
        // Auto-extract zip file after creation
        $record = $this->getRecord();
        
        if ($record->site_file) {
            $zipPath = storage_path('app/public/' . $record->site_file);
            
            if (file_exists($zipPath)) {
                try {
                    $record->processZipFile($zipPath);
                    
                    // Check if index file exists
                    $indexFile = $record->getIndexFilePath();
                    
                    if (!$indexFile) {
                        // Send notification (Filament v3 way)
                        Notification::make()
                            ->title('Site Extracted with Warning')
                            ->body('Site extracted but no index.html/index.php found in root directory.')
                            ->warning()
                            ->send();
                    } else {
                        Notification::make()
                            ->title('Success')
                            ->body('Site extracted successfully!')
                            ->success()
                            ->send();
                    }
                } catch (\Exception $e) {
                    Notification::make()
                        ->title('Extraction Failed')
                        ->body('Failed to extract zip: ' . $e->getMessage())
                        ->danger()
                        ->send();
                }
            }
        }
    }
    
    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Product site created successfully';
    }
    
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}