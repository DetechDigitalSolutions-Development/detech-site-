<?php

namespace App\Filament\Resources\ProductSiteResource\Pages;

use App\Filament\Resources\ProductSiteResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProductSites extends ListRecords
{
    protected static string $resource = ProductSiteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
