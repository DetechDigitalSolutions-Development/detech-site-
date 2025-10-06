<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('featured_img')
                    ->image()
                    ->directory('featured_img/projects')
                    ->disk('public')
                    ->columnSpanFull()
                    ->nullable(),
                Forms\Components\RichEditor::make('content_section_1')
                    ->label('Content Section 1')
                    ->nullable()
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('content_section_2')
                    ->label('Content Section 2')
                    ->nullable()
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('project_imgs')
                    ->label('Project Images')
                    ->directory('media/projects')
                    ->disk('public')
                    ->image()
                    ->multiple()
                    ->nullable()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('challenge_title')
                    ->nullable(),
                Forms\Components\TagsInput::make('challenge_points')
                    ->nullable(),
                Forms\Components\TextInput::make('client_name')
                    ->nullable(),
                Forms\Components\DatePicker::make('start_date')
                    ->nullable(),
                Forms\Components\DatePicker::make('end_date')
                    ->nullable(),
                Forms\Components\TextInput::make('owner')
                    ->nullable(),
                Forms\Components\TagsInput::make('categories')
                    ->nullable(),
                Forms\Components\TextInput::make('website')
                    ->nullable()
                    ->url()
                    ->label('Website URL')
                    ->helperText('Please enter a valid URL.'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\ImageColumn::make('featured_img'),
                Tables\Columns\TextColumn::make('client_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('owner')
                    ->searchable(),
                Tables\Columns\TagsColumn::make('categories')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
