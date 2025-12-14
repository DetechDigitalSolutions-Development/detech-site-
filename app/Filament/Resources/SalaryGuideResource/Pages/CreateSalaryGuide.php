<?php

namespace App\Filament\Resources\SalaryGuideResource\Pages;

use App\Filament\Resources\SalaryGuideResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSalaryGuide extends CreateRecord
{
    protected static string $resource = SalaryGuideResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
