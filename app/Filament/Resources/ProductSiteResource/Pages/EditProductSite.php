<?php

namespace App\Filament\Resources\ProductSiteResource\Pages;

use App\Filament\Resources\ProductSiteResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProductSite extends EditRecord
{
    protected static string $resource = ProductSiteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
