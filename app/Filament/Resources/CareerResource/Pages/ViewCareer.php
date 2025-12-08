<?php

namespace App\Filament\Resources\CareerResource\Pages;

use App\Filament\Resources\CareerResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Contracts\Support\Htmlable;

class ViewCareer extends ViewRecord
{
    protected static string $resource = CareerResource::class;

    public function getTitle(): string|Htmlable
    {
        return $this->record->job_title;
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
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
}