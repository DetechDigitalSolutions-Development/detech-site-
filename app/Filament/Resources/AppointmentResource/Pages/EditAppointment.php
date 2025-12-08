<?php

namespace App\Filament\Resources\AppointmentResource\Pages;

use App\Filament\Resources\AppointmentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAppointment extends EditRecord
{
    protected static string $resource = AppointmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\Action::make('toggleReadStatus')
                ->label(fn (): string => $this->record->read ? 'Mark as Unread' : 'Mark as Read')
                ->icon(fn (): string => $this->record->read ? 'heroicon-o-x-circle' : 'heroicon-o-check-circle')
                ->color(fn (): string => $this->record->read ? 'warning' : 'success')
                ->action(function (): void {
                    if ($this->record->read) {
                        $this->record->markAsUnread();
                    } else {
                        $this->record->markAsRead();
                    }
                    $this->refreshFormData(['read']);
                }),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getSavedNotificationTitle(): ?string
    {
        return 'Appointment updated successfully';
    }
}