<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AppointmentResource\Pages;
use App\Models\Appointment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AppointmentResource extends Resource
{
    protected static ?string $model = Appointment::class;
    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Toggle::make('read')
                    ->label('Mark as Read')
                    ->default(false)
                    ->inline(false)
                    ->columnSpanFull(),
                
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                
                Forms\Components\TextInput::make('service')
                    ->required()
                    ->maxLength(255),
                
                Forms\Components\Textarea::make('message')
                    ->required()
                    ->columnSpanFull()
                    ->rows(5),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\IconColumn::make('read')
                    ->label('Read')
                    ->boolean()
                    ->sortable()
                    ->action(function ($record) {
                        $record->update(['read' => !$record->read]);
                    }),
                
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                
                Tables\Columns\TextColumn::make('service')
                    ->searchable()
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('message')
                    ->limit(50)
                    ->tooltip(fn (Appointment $record): string => $record->message)
                    ->wrap()
                    ->label('Message'),
                
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('M d, Y h:i A')
                    ->sortable()
                    ->label('Submitted'),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('read')
                    ->label('Status')
                    ->options([
                        false => 'Unread',
                        true => 'Read',
                    ])
                    ->default(false), // Default to show unread
            ])
            ->actions([
                Tables\Actions\Action::make('markAsRead')
                    ->label('Mark as Read')
                    ->icon('heroicon-o-check-circle')
                    ->color('success')
                    ->visible(fn (Appointment $record): bool => !$record->read)
                    ->action(function (Appointment $record) {
                        $record->markAsRead();
                    }),
                
                Tables\Actions\Action::make('markAsUnread')
                    ->label('Mark as Unread')
                    ->icon('heroicon-o-x-circle')
                    ->color('warning')
                    ->visible(fn (Appointment $record): bool => $record->read)
                    ->action(function (Appointment $record) {
                        $record->markAsUnread();
                    }),
                
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    
                    Tables\Actions\BulkAction::make('markAsRead')
                        ->label('Mark as Read')
                        ->icon('heroicon-o-check-circle')
                        ->color('success')
                        ->action(function ($records) {
                            $records->each->markAsRead();
                        }),
                    
                    Tables\Actions\BulkAction::make('markAsUnread')
                        ->label('Mark as Unread')
                        ->icon('heroicon-o-x-circle')
                        ->color('warning')
                        ->action(function ($records) {
                            $records->each->markAsUnread();
                        }),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAppointments::route('/'),
            'create' => Pages\CreateAppointment::route('/create'),
            'edit' => Pages\EditAppointment::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        // Show count of unread appointments
        return static::getModel()::unread()->count();
    }

    public static function getNavigationBadgeColor(): string|array|null
    {
        $unreadCount = static::getModel()::unread()->count();
        
        return match (true) {
            $unreadCount > 10 => 'danger',
            $unreadCount > 5 => 'warning',
            $unreadCount > 0 => 'success',
            default => null,
        };
    }

    public static function getNavigationLabel(): string
    {
        $unreadCount = static::getModel()::unread()->count();
        
        if ($unreadCount > 0) {
            return "Appointments ({$unreadCount})";
        }
        
        return "Appointments";
    }

    public static function getModelLabel(): string
    {
        return 'Appointment';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Appointments';
    }
}