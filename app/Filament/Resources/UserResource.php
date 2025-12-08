<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UserResource extends Resource
{
    protected static ?string $model = User::class;
    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationGroup = 'User Management';
    protected static ?int $navigationSort = 1;
    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('User Information')
                    ->schema([
                        Forms\Components\Grid::make()
                            ->schema([
                                Forms\Components\TextInput::make('name')
                                    ->label('Full Name')
                                    ->required()
                                    ->maxLength(255)
                                    ->columnSpan(1),
                                
                                Forms\Components\TextInput::make('email')
                                    ->label('Email Address')
                                    ->email()
                                    ->required()
                                    ->unique(ignoreRecord: true)
                                    ->maxLength(255)
                                    ->columnSpan(1),
                            ]),
                        
                        Forms\Components\Grid::make()
                            ->schema([
                                Forms\Components\TextInput::make('password')
                                    ->label('Password')
                                    ->password()
                                    ->revealable()
                                    ->required(fn (string $context): bool => $context === 'create')
                                    ->dehydrated(fn ($state) => filled($state))
                                    ->rule(Password::default())
                                    ->dehydrateStateUsing(fn ($state) => Hash::make($state))
                                    ->same('passwordConfirmation')
                                    ->columnSpan(1),
                                
                                Forms\Components\TextInput::make('passwordConfirmation')
                                    ->label('Confirm Password')
                                    ->password()
                                    ->revealable()
                                    ->required(fn (string $context): bool => $context === 'create')
                                    ->dehydrated(false)
                                    ->columnSpan(1),
                            ]),
                        
                        Forms\Components\Toggle::make('email_verified_at')
                            ->label('Email Verified')
                            ->onIcon('heroicon-o-check-circle')
                            ->offIcon('heroicon-o-x-circle')
                            ->onColor('success')
                            ->offColor('danger')
                            ->dehydrateStateUsing(fn ($state) => $state ? now() : null)
                            ->dehydrated(fn ($state): bool => filled($state)),
                    ])
                    ->columns(1),
                
                // Fixed timestamp section - only shows in edit mode
                Forms\Components\Section::make('Timestamps')
                    ->schema([
                        Forms\Components\Placeholder::make('created_at')
                            ->label('Created At')
                            ->content(function (?User $record): string {
                                if (!$record || !$record->created_at) {
                                    return 'N/A';
                                }
                                return $record->created_at->format('M d, Y h:i A');
                            }),
                        
                        Forms\Components\Placeholder::make('updated_at')
                            ->label('Updated At')
                            ->content(function (?User $record): string {
                                if (!$record || !$record->updated_at) {
                                    return 'N/A';
                                }
                                return $record->updated_at->format('M d, Y h:i A');
                            }),
                    ])
                    ->columns(2)
                    ->collapsible()
                    ->collapsed()
                    ->visible(fn (string $context): bool => $context === 'edit'), // Only show in edit mode
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Name')
                    ->searchable()
                    ->sortable()
                    ->weight('medium'),
                
                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->sortable()
                    ->copyable()
                    ->copyMessage('Email copied')
                    ->copyMessageDuration(1500),
                
                Tables\Columns\IconColumn::make('email_verified_at')
                    ->label('Verified')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->trueColor('success')
                    ->falseColor('danger')
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime('M d, Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: false),
                
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Updated')
                    ->dateTime('M d, Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\Filter::make('verified')
                    ->label('Email Verified')
                    ->query(fn (Builder $query): Builder => $query->whereNotNull('email_verified_at')),
                
                Tables\Filters\Filter::make('unverified')
                    ->label('Email Not Verified')
                    ->query(fn (Builder $query): Builder => $query->whereNull('email_verified_at')),
                
                Tables\Filters\Filter::make('created_at')
                    ->form([
                        Forms\Components\DatePicker::make('created_from')
                            ->label('Created from'),
                        Forms\Components\DatePicker::make('created_until')
                            ->label('Created until'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['created_from'],
                                fn (Builder $query, $date): Builder => $query->whereDate('created_at', '>=', $date),
                            )
                            ->when(
                                $data['created_until'],
                                fn (Builder $query, $date): Builder => $query->whereDate('created_at', '<=', $date),
                            );
                    }),
            ])
            ->actions([
                Tables\Actions\Action::make('verifyEmail')
                    ->label('Verify Email')
                    ->icon('heroicon-o-check-circle')
                    ->color('success')
                    ->visible(fn (User $record): bool => is_null($record->email_verified_at))
                    ->action(function (User $record): void {
                        $record->email_verified_at = now();
                        $record->save();
                    })
                    ->requiresConfirmation(),
                
                Tables\Actions\Action::make('unverifyEmail')
                    ->label('Unverify Email')
                    ->icon('heroicon-o-x-circle')
                    ->color('warning')
                    ->visible(fn (User $record): bool => !is_null($record->email_verified_at))
                    ->action(function (User $record): void {
                        $record->email_verified_at = null;
                        $record->save();
                    })
                    ->requiresConfirmation(),
                
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    
                    Tables\Actions\BulkAction::make('verifyEmails')
                        ->label('Verify Emails')
                        ->icon('heroicon-o-check-circle')
                        ->color('success')
                        ->action(function ($records): void {
                            $records->each(function ($record) {
                                $record->email_verified_at = now();
                                $record->save();
                            });
                        })
                        ->requiresConfirmation(),
                    
                    Tables\Actions\BulkAction::make('unverifyEmails')
                        ->label('Unverify Emails')
                        ->icon('heroicon-o-x-circle')
                        ->color('warning')
                        ->action(function ($records): void {
                            $records->each(function ($record) {
                                $record->email_verified_at = null;
                                $record->save();
                            });
                        })
                        ->requiresConfirmation(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->defaultSort('created_at', 'desc')
            ->persistFiltersInSession()
            ->persistSearchInSession()
            ->persistColumnSearchesInSession();
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }

    // public static function getNavigationBadge(): ?string
    // {
    //     return static::getModel()::count();
    // }

    public static function getNavigationBadgeColor(): string|array|null
    {
        return 'primary';
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['name', 'email'];
    }

    public static function getGlobalSearchResultDetails(\Illuminate\Database\Eloquent\Model $record): array
    {
        return [
            'Email' => $record->email,
            'Verified' => $record->email_verified_at ? 'Yes' : 'No',
        ];
    }

    public static function getGlobalSearchResultUrl(\Illuminate\Database\Eloquent\Model $record): string
    {
        return self::getUrl('edit', ['record' => $record]);
    }
}