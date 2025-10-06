<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeamResource\Pages;
use App\Models\Team;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TeamResource extends Resource
{
    protected static ?string $model = Team::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('designation')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('profile_img')
                    ->image()
                    ->directory('profile_img/teams')
                    ->disk('public')
                    ->nullable(),
                Forms\Components\TextInput::make('year_of_exp')
                    ->numeric()
                    ->nullable(),
                Forms\Components\TextInput::make('tel_no')
                    ->tel()
                    ->nullable(),
                Forms\Components\TextInput::make('e_mail')
                    ->email()
                    ->nullable(),
                Forms\Components\TextInput::make('fb_url')
                    ->url()
                    ->nullable(),
                Forms\Components\TextInput::make('linkedin_url')
                    ->url()
                    ->nullable(),
                Forms\Components\TextInput::make('x_url')
                    ->url()
                    ->nullable(),
                Forms\Components\TextInput::make('insta_url')
                    ->url()
                    ->nullable(),
                Forms\Components\Textarea::make('summery')
                    ->nullable(),
                Forms\Components\Textarea::make('short_bio')
                    ->nullable(),
                Forms\Components\Textarea::make('about_me')
                    ->nullable(),
                Forms\Components\Textarea::make('skill_summary')
                    ->nullable(),
                Forms\Components\KeyValue::make('skills')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('designation')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('profile_img'),
                Tables\Columns\TextColumn::make('year_of_exp')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tel_no')
                    ->searchable(),
                Tables\Columns\TextColumn::make('e_mail')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('skills')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTeams::route('/'),
            'create' => Pages\CreateTeam::route('/create'),
            'edit' => Pages\EditTeam::route('/{record}/edit'),
        ];
    }
}
