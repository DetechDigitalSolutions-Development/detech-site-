<?php

namespace App\Filament\Resources\CareerResource\Pages;

use App\Filament\Resources\CareerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCareer extends EditRecord
{
    protected static string $resource = CareerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\Action::make('toggleActive')
                ->label(fn (): string => $this->record->is_active ? 'Deactivate' : 'Activate')
                ->icon(fn (): string => $this->record->is_active ? 'heroicon-o-eye-slash' : 'heroicon-o-eye')
                ->color(fn (): string => $this->record->is_active ? 'danger' : 'success')
                ->action(function (): void {
                    $this->record->update(['is_active' => !$this->record->is_active]);
                    $this->refreshFormData([
                        'is_active',
                    ]);
                }),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getSavedNotificationTitle(): ?string
    {
        return 'Job opening updated successfully';
    }
}