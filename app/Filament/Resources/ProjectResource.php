<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Notifications\Notification;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder';

    protected static ?string $navigationGroup = 'Content';

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
                    // ->nullable()
                    ->columnSpanFull(),
                    
                Forms\Components\RichEditor::make('content_section_2')
                    ->label('Content Section 2')
                    // ->nullable()
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
                    
                // Start Date with validation
                Forms\Components\DatePicker::make('start_date')
                    ->nullable()
                    ->live()
                    ->afterStateUpdated(function (Forms\Set $set, $state, Forms\Get $get) {
                        $endDate = $get('end_date');
                        
                        if ($endDate && $state > $endDate) {
                            // Clear end date if start is after it
                            $set('end_date', null);
                            
                            // Show notification
                            Notification::make()
                                ->title('Invalid Start Date')
                                ->body('Start date cannot be after end date.')
                                ->warning()
                                ->send();
                        }
                    })
                    ->rule(function (Forms\Get $get) {
                        return function ($attribute, $value, $fail) use ($get) {
                            $endDate = $get('end_date');
                            
                            if ($endDate && $value > $endDate) {
                                $fail('Start date must be before or equal to end date.');
                            }
                        };
                    }),
                    
                // End Date with validation
                Forms\Components\DatePicker::make('end_date')
                    ->nullable()
                    ->live()
                    ->minDate(fn (Forms\Get $get) => $get('start_date'))
                    ->rule(function (Forms\Get $get) {
                        return function ($attribute, $value, $fail) use ($get) {
                            $startDate = $get('start_date');
                            
                            if ($startDate && $value < $startDate) {
                                $fail('End date must be after or equal to start date.');
                            }
                        };
                    })
                    ->validationMessages([
                        'min' => 'End date must be after or equal to start date.',
                    ]),
                    
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
