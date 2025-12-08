<?php

namespace App\Filament\Resources\AppointmentResource\Pages;

use App\Filament\Resources\AppointmentResource;
use App\Models\Appointment;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListAppointments extends ListRecords
{
    protected static string $resource = AppointmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->icon('heroicon-o-plus-circle')
                ->label('New Appointment'),
        ];
    }

    public function getTabs(): array
    {
        return [
            'all' => Tab::make('All Appointments')
                ->icon('heroicon-o-list-bullet')
                ->badge(Appointment::count()),
            
            'unread' => Tab::make('Unread')
                ->icon('heroicon-o-envelope')
                ->badge(Appointment::unread()->count())
                ->badgeColor('danger')
                ->modifyQueryUsing(fn (Builder $query) => $query->unread()),
            
            'read' => Tab::make('Read')
                ->icon('heroicon-o-envelope-open')
                ->badge(Appointment::read()->count())
                ->badgeColor('success')
                ->modifyQueryUsing(fn (Builder $query) => $query->read()),
        ];
    }

    public function getDefaultActiveTab(): string|int|null
    {
        return 'unread';
    }
}