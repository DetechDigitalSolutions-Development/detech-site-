<?php

namespace App\Filament\Resources\SalaryGuideResource\Pages;

use App\Filament\Resources\SalaryGuideResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSalaryGuide extends EditRecord
{
    protected static string $resource = SalaryGuideResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
