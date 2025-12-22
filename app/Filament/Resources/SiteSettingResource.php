<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SiteSettingResource\Pages;
use App\Models\SiteSetting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class SiteSettingResource extends Resource
{
    protected static ?string $model = SiteSetting::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static ?string $navigationGroup = 'Content Management';

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationLabel = 'Site Settings';

    protected static ?string $modelLabel = 'Site Setting';

    protected static ?string $pluralModelLabel = 'Site Settings';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Setting Information')
                    ->schema([
                        Forms\Components\TextInput::make('key')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true)
                            ->disabled(fn ($record) => $record !== null)
                            ->helperText('Unique identifier for this setting')
                            ->columnSpanFull(),

                        Forms\Components\Textarea::make('description')
                            ->maxLength(500)
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Setting Value')
                    ->schema([
                        Forms\Components\Select::make('type')
                            ->required()
                            ->options([
                                'text' => 'Text',
                                'textarea' => 'Text Area',
                                'email' => 'Email',
                                'url' => 'URL',
                                'boolean' => 'Boolean (Yes/No)',
                                'number' => 'Number',
                                'date' => 'Date',
                                'multiple_images' => 'Multiple Images',
                                'image' => 'Single Image',
                                'file' => 'File Upload',
                            ])
                            ->reactive()
                            ->afterStateUpdated(fn ($state, Forms\Set $set) => $set('value', '')),

                        Forms\Components\Select::make('group')
                            ->required()
                            ->options([
                                'general' => 'General',
                                'contact' => 'Contact',
                                'social' => 'Social Media',
                                'career' => 'Career',
                                'clients' => 'Clients',
                                'seo' => 'SEO',
                                'appearance' => 'Appearance',
                                'legal' => 'Legal Documents',
                                'documents' => 'Documents',
                            ]),

                        Forms\Components\Group::make()
                            ->schema(fn ($get) => match ($get('type')) {
                                'textarea' => [
                                    Forms\Components\Textarea::make('value')
                                        ->rows(5)
                                        ->columnSpanFull(),
                                ],
                                'boolean' => [
                                    Forms\Components\Toggle::make('value')
                                        ->label('Enabled')
                                        ->onColor('success')
                                        ->offColor('danger')
                                        ->inline(false)
                                        ->formatStateUsing(fn ($state, $record) => $state === '1' || $state === 1 || $state === true
                                        ),
                                ],
                                'number' => [
                                    Forms\Components\TextInput::make('value')
                                        ->numeric()
                                        ->rules(['numeric']),
                                ],
                                'email' => [
                                    Forms\Components\TextInput::make('value')
                                        ->email()
                                        ->rules(['email']),
                                ],
                                'url' => [
                                    Forms\Components\TextInput::make('value')
                                        ->url()
                                        ->rules(['url']),
                                ],
                                'date' => [
                                    Forms\Components\DatePicker::make('value')
                                        ->format('Y-m-d'),
                                ],
                                'multiple_images' => [
                                    Forms\Components\FileUpload::make('value')
                                        ->multiple()
                                        ->image()
                                        ->imageEditor()
                                        ->disk('public')
                                        ->directory('settings/client-logos')
                                        ->getUploadedFileNameForStorageUsing(
                                            fn (TemporaryUploadedFile $file): string => Str::random(20).'.'.$file->getClientOriginalExtension()
                                        )
                                        ->maxFiles(20)
                                        ->reorderable()
                                        ->columnSpanFull()
                                        ->helperText('Upload multiple client company logos. Max 20 images.')
                                        ->formatStateUsing(function ($state, $record) {
                                            // Convert JSON string to array for display
                                            if (empty($state)) {
                                                return [];
                                            }

                                            if (is_string($state)) {
                                                try {
                                                    $decoded = json_decode($state, true);

                                                    return is_array($decoded) ? $decoded : [];
                                                } catch (\Exception $e) {
                                                    return [];
                                                }
                                            }

                                            return $state;
                                        })
                                        ->dehydrateStateUsing(function ($state) {
                                            // Convert array to JSON string for storage
                                            if (is_array($state)) {
                                                return json_encode($state);
                                            }

                                            return $state;
                                        })
                                        ->loadingIndicatorPosition('left')
                                        ->panelLayout('grid')
                                        ->panelAspectRatio('1:1'),
                                ],
                                'image' => [
                                    Forms\Components\FileUpload::make('value')
                                        ->image()
                                        ->imageEditor()
                                        ->disk('public')
                                        ->directory('settings')
                                        ->columnSpanFull()
                                        ->helperText('Upload a single image'),
                                ],
                                'file' => [
                                    Forms\Components\FileUpload::make('value')
                                        ->acceptedFileTypes([
                                            'application/pdf',
                                            'application/msword',
                                            'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                                            'application/vnd.ms-excel',
                                            'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                                            'application/zip',
                                            'text/csv',
                                            'application/vnd.ms-powerpoint',
                                            'application/vnd.openxmlformats-officedocument.presentationml.presentation',
                                        ])
                                        ->disk('public')
                                        ->directory('settings/files')
                                        ->preserveFilenames()
                                        ->maxSize(10240) // 10MB
                                        ->helperText('Upload PDF, DOC, Excel, or other files. Max 10MB.')
                                        ->columnSpanFull()
                                        ->downloadable(),
                                ],
                                default => [
                                    Forms\Components\TextInput::make('value')
                                        ->maxLength(255),
                                ],
                            })
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('key')
                    ->searchable()
                    ->sortable()
                    ->description(fn ($record) => $record->description),

                Tables\Columns\TextColumn::make('value')
                    ->searchable()
                    ->sortable()
                    ->limit(50)
                    ->tooltip(fn ($record) => $record->value)
                    ->formatStateUsing(function ($state, $record) {
                        if ($record->type === 'boolean') {
                            return $state ? 'Yes' : 'No';
                        }

                        if ($record->type === 'multiple_images') {
                            try {
                                $logos = json_decode($state, true);
                                if (is_array($logos) && ! empty($logos)) {
                                    return count($logos).' logo(s)';
                                }

                                return 'No logos';
                            } catch (\Exception $e) {
                                return 'Invalid data';
                            }
                        }

                        if ($record->type === 'image' && $state) {
                            return 'Image uploaded';
                        }

                        // Add this for file type
                        if ($record->type === 'file' && $state) {
                            $filename = basename($state);

                            return $filename.' (File)';
                        }

                        return $state;
                    }),

                Tables\Columns\TextColumn::make('type')
                    ->badge()
                    ->color(fn ($state) => match ($state) {
                        'text' => 'gray',
                        'textarea' => 'blue',
                        'email' => 'info',
                        'url' => 'warning',
                        'boolean' => 'success',
                        'multiple_images' => 'primary',
                        'image' => 'primary',
                        default => 'secondary',
                    })
                    ->formatStateUsing(fn ($state) => Str::title($state)),

                Tables\Columns\TextColumn::make('group')
                    ->badge()
                    ->color(fn ($state) => match ($state) {
                        'general' => 'gray',
                        'contact' => 'info',
                        'social' => 'blue',
                        'career' => 'warning',
                        'clients' => 'success',
                        'seo' => 'purple',
                        'appearance' => 'pink',
                        default => 'secondary',
                    })
                    ->formatStateUsing(fn ($state) => Str::title($state)),

                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('group')
                    ->options([
                        'general' => 'General',
                        'contact' => 'Contact',
                        'social' => 'Social Media',
                        'career' => 'Career',
                        'clients' => 'Clients',
                    ]),

                Tables\Filters\SelectFilter::make('type')
                    ->options([
                        'text' => 'Text',
                        'textarea' => 'Text Area',
                        'email' => 'Email',
                        'url' => 'URL',
                        'boolean' => 'Boolean',
                        'multiple_images' => 'Multiple Images',
                        'image' => 'Image',
                        'file' => 'File',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                // Tables\Actions\DeleteAction::make()
                //     ->before(function ($record) {
                //         if ($record->type === 'multiple_images') {
                //             $images = json_decode($record->value, true) ?? [];
                //             foreach ($images as $image) {
                //                 if (is_string($image)) {
                //                     Storage::disk('public')->delete($image);
                //                 }
                //             }
                //         } elseif ($record->type === 'image' && $record->value) {
                //             Storage::disk('public')->delete($record->value);
                //         }
                //     }),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // Tables\Actions\DeleteBulkAction::make()
                    //     ->before(function ($records) {
                    //         foreach ($records as $record) {
                    //             if ($record->type === 'multiple_images') {
                    //                 $images = json_decode($record->value, true) ?? [];
                    //                 foreach ($images as $image) {
                    //                     if (is_string($image)) {
                    //                         Storage::disk('public')->delete($image);
                    //                     }
                    //                 }
                    //             } elseif ($record->type === 'image' && $record->value) {
                    //                 Storage::disk('public')->delete($record->value);
                    //             }
                    //         }
                    //     }),
                ]),
            ])
            ->defaultSort('group')
            ->groups([
                Tables\Grouping\Group::make('group')
                    ->label('Group')
                    ->collapsible(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSiteSettings::route('/'),
            'create' => Pages\CreateSiteSetting::route('/create'),
            'edit' => Pages\EditSiteSetting::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
}
