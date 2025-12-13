<?php

namespace App\Filament\Resources\SalaryGuideResource\Pages;

use App\Filament\Resources\SalaryGuideResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSalaryGuides extends ListRecords
{
    protected static string $resource = SalaryGuideResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
