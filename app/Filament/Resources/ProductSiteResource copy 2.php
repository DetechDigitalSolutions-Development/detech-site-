<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductSiteResource\Pages;
use App\Models\ProductSite;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ProductSiteResource extends Resource
{
    protected static ?string $model = ProductSite::class;
    protected static ?string $navigationIcon = 'heroicon-o-cube';
    protected static ?string $navigationLabel = 'Products';
    protected static ?string $navigationGroup = 'Content';
    protected static ?int $navigationSort = 20;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Product Site Information')
                    ->schema([
                        Forms\Components\TextInput::make('product_title')
                            ->required()
                            ->maxLength(255)
                            ->label('Product Title')
                            ->helperText('The title of your product/site'),

                        Forms\Components\FileUpload::make('featured_img')
                            ->label('Featured Image')
                            ->image()
                            ->directory('featured_img/product-sites')
                            ->maxSize(2048)
                            ->nullable(),

                        Forms\Components\Textarea::make('short_description')
                            ->nullable()
                            ->rows(3)
                            ->maxLength(500),

                        Forms\Components\TextInput::make('site_slug')
                            ->required()
                            ->maxLength(255)
                            ->label('Site Slug')
                            ->helperText('This will be used in the URL: ' . url('/') . '/{slug}')
                            ->live(onBlur: true)
                            ->afterStateUpdated(function ($state, Forms\Set $set, Forms\Get $get) {
                                if (empty($state) && $get('product_title')) {
                                    $slug = Str::slug($get('product_title'));
                                    $set('site_slug', $slug);
                                }
                            })
                            ->hintAction(
                                Forms\Components\Actions\Action::make('generateSlug')
                                    ->label('Generate from Title')
                                    ->icon('heroicon-o-sparkles')
                                    ->action(function (Forms\Get $get, Forms\Set $set) {
                                        $title = $get('product_title');
                                        if (!empty($title)) {
                                            $slug = Str::slug($title);
                                            $set('site_slug', $slug);
                                        }
                                    })
                            ),

                        Forms\Components\Select::make('site_location')
                            ->options([
                                'us' => 'United States',
                                'eu' => 'Europe',
                                'asia' => 'Asia',
                                'global' => 'Global',
                                'custom' => 'Custom Location',
                            ])
                            ->required()
                            ->label('Site Location')
                            ->default('global'),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Site Configuration')
                    ->schema([
                        Forms\Components\Toggle::make('is_active')
                            ->label('Active')
                            ->default(true)
                            ->helperText('Make site accessible to users'),
                            
                        Forms\Components\Toggle::make('use_external_link')
                            ->label('Use External Product Link Instead of Zip Upload')
                            ->live()
                            ->reactive()
                            ->default(false)
                            ->helperText('Toggle ON to use an external product link, OFF to upload a zip file')
                            ->afterStateUpdated(function ($state, Forms\Set $set) {
                                if ($state) {
                                    // Clear zip file when switching to external link
                                    $set('site_file', null);
                                    $set('extracted_path', null);
                                } else {
                                    // Clear product link when switching to zip upload
                                    $set('product_link', null);
                                }
                            }),
                    ]),

                Forms\Components\Section::make('External Product Link')
                    ->schema([
                        Forms\Components\TextInput::make('product_link')
                            ->label('Product/Demo Link')
                            ->url()
                            ->maxLength(500)
                            ->placeholder('https://example.com/demo')
                            ->helperText('Enter the external URL for your product demo/site')
                            ->required(fn (Forms\Get $get) => $get('use_external_link'))
                            ->disabled(fn (Forms\Get $get) => !$get('use_external_link'))
                            ->visible(fn (Forms\Get $get) => $get('use_external_link')),
                    ])
                    ->collapsible()
                    ->collapsed(false)
                    ->visible(fn (Forms\Get $get) => $get('use_external_link')),

                Forms\Components\Section::make('Site Files')
                    ->schema([
                        Forms\Components\FileUpload::make('site_file')
                            ->label('Site Zip File')
                            ->acceptedFileTypes(['application/zip', 'application/x-zip-compressed'])
                            ->maxSize(102400)
                            ->directory('product-sites/zips')
                            ->required(fn (Forms\Get $get, $operation) => 
                                !$get('use_external_link') && $operation === 'create'
                            )
                            ->disabled(fn (Forms\Get $get) => $get('use_external_link'))
                            ->dehydrated(fn (Forms\Get $get) => !$get('use_external_link'))
                            ->live()
                            ->afterStateUpdated(function ($state, Forms\Set $set, $livewire) {
                                $set('extracted_path', null);
                            })
                            ->helperText('Upload a zip file containing your website (max 100MB). Should include index.html/index.php in root.')
                            ->visible(fn (Forms\Get $get) => !$get('use_external_link')),

                        Forms\Components\Placeholder::make('extracted_info')
                            ->label('Extraction Status')
                            ->content(function ($get) {
                                if ($get('extracted_path')) {
                                    return '✅ Site extracted successfully';
                                }
                                if ($get('site_file')) {
                                    return '⚠️ Zip file uploaded but not extracted yet';
                                }
                                return 'No zip file uploaded';
                            })
                            ->hidden(fn ($get) => $get('use_external_link') || !$get('site_file'))
                            ->visible(fn (Forms\Get $get) => !$get('use_external_link')),
                            
                        Forms\Components\Placeholder::make('existing_file_info')
                            ->label('Current File')
                            ->content(function ($record) {
                                if ($record && $record->site_file && !$record->product_link) {
                                    return '📁 ' . basename($record->site_file) . ' (uploaded)';
                                }
                                return null;
                            })
                            ->hidden(fn ($record, Forms\Get $get) => 
                                !$record || $get('use_external_link') || !$record->site_file
                            )
                            ->visible(fn ($record, Forms\Get $get) => 
                                $record && !$get('use_external_link') && $record->site_file
                            ),
                    ])
                    ->collapsible()
                    ->collapsed(false)
                    ->visible(fn (Forms\Get $get) => !$get('use_external_link')),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('product_title')
                    ->searchable()
                    ->sortable()
                    ->weight('medium')
                    ->description(fn (ProductSite $record) => 
                        Str::limit($record->short_description, 50)
                    ),

                Tables\Columns\ImageColumn::make('featured_img')
                    ->circular()
                    ->defaultImageUrl(url('/images/default-product.png')),

                Tables\Columns\TextColumn::make('site_slug')
                    ->label('Slug')
                    ->searchable()
                    ->sortable()
                    ->copyable()
                    ->copyMessage('Slug copied!')
                    ->copyMessageDuration(1500),

                Tables\Columns\BadgeColumn::make('site_type')
                    ->label('Type')
                    ->getStateUsing(fn (ProductSite $record) => 
                        $record->product_link && !$record->site_file ? 'External Link' : 'Zip Upload'
                    )
                    ->colors([
                        'success' => 'External Link',
                        'info' => 'Zip Upload',
                    ])
                    ->icon(fn ($state) => 
                        $state === 'External Link' ? 'heroicon-o-link' : 'heroicon-o-archive-box'
                    ),

                Tables\Columns\BadgeColumn::make('site_location')
                    ->colors([
                        'success' => 'global',
                        'warning' => 'us',
                        'info' => 'eu',
                        'danger' => 'asia',
                        'gray' => 'custom',
                    ])
                    ->formatStateUsing(fn ($state) => match($state) {
                        'us' => 'US',
                        'eu' => 'EU',
                        'asia' => 'Asia',
                        'global' => 'Global',
                        'custom' => 'Custom',
                        default => ucfirst($state),
                    }),

                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->trueColor('success')
                    ->falseColor('danger')
                    ->label('Active'),

                Tables\Columns\TextColumn::make('site_file')
                    ->label('Zip File')
                    ->formatStateUsing(fn ($state, ProductSite $record) => 
                        $record->product_link ? '🔗 External Link' : 
                        ($state ? '✅ Uploaded' : '❌ Missing')
                    )
                    ->alignCenter(),

                Tables\Columns\TextColumn::make('extracted_path')
                    ->label('Extracted')
                    ->formatStateUsing(fn ($state, ProductSite $record) => 
                        $record->product_link ? 'N/A' :
                        ($state ? '✅ Yes' : '❌ No')
                    )
                    ->alignCenter(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('site_location')
                    ->options([
                        'us' => 'United States',
                        'eu' => 'Europe',
                        'asia' => 'Asia',
                        'global' => 'Global',
                        'custom' => 'Custom Location',
                    ]),

                Tables\Filters\SelectFilter::make('site_type')
                    ->label('Site Type')
                    ->options([
                        'external' => 'External Link',
                        'zip' => 'Zip Upload',
                    ])
                    ->query(function ($query, $data) {
                        if ($data['value'] === 'external') {
                            return $query->whereNotNull('product_link')->whereNull('site_file');
                        } elseif ($data['value'] === 'zip') {
                            return $query->whereNotNull('site_file')->whereNull('product_link');
                        }
                    }),

                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Active Status'),

                Tables\Filters\TernaryFilter::make('has_extracted')
                    ->label('Extracted Files')
                    ->queries(
                        true: fn ($query) => $query->whereNotNull('extracted_path'),
                        false: fn ($query) => $query->whereNull('extracted_path'),
                    )
                    ->hidden(fn () => ProductSite::whereNotNull('product_link')->count() > 0),
            ])
            ->actions([
                Tables\Actions\Action::make('view_site')
                    ->label('View')
                    ->icon('heroicon-o-eye')
                    ->color('success')
                    ->url(fn (ProductSite $record) => $record->site_url)
                    ->openUrlInNewTab()
                    ->hidden(fn (ProductSite $record) => 
                        !$record->site_url || 
                        (!$record->extracted_path && !$record->product_link)
                    )
                    ->tooltip(fn (ProductSite $record) => 
                        $record->product_link ? 'Open External Link' : 'View Extracted Site'
                    ),

                Tables\Actions\Action::make('extract')
                    ->label('Extract')
                    ->icon('heroicon-o-archive-box')
                    ->color('warning')
                    ->action(function (ProductSite $record) {
                        try {
                            if (!$record->site_file) {
                                throw new \Exception('No zip file uploaded');
                            }

                            $zipPath = storage_path('app/public/'.$record->site_file);

                            if (!file_exists($zipPath)) {
                                throw new \Exception('Zip file not found');
                            }

                            $extractedPath = $record->processZipFile($zipPath);

                            $indexFile = $record->getIndexFilePath();

                            if (!$indexFile) {
                                throw new \Exception('No index.html or index.php found in root directory');
                            }

                            return redirect()->back()->with('success', 'Site extracted successfully!');

                        } catch (\Exception $e) {
                            return redirect()->back()->with('error', 'Failed to extract: '.$e->getMessage());
                        }
                    })
                    ->requiresConfirmation()
                    ->modalHeading('Extract Zip File')
                    ->modalSubheading('This will extract the uploaded zip file and make the site accessible.')
                    ->modalButton('Extract Now')
                    ->hidden(fn (ProductSite $record) => 
                        $record->product_link || 
                        !$record->site_file || 
                        $record->extracted_path
                    )
                    ->visible(fn (ProductSite $record) => 
                        $record->site_file && !$record->extracted_path
                    ),

                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->before(function (ProductSite $record) {
                        $record->cleanupFiles();
                    }),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\BulkAction::make('activate')
                        ->icon('heroicon-o-check-circle')
                        ->color('success')
                        ->action(function ($records) {
                            foreach ($records as $record) {
                                $record->update(['is_active' => true]);
                            }
                        })
                        ->deselectRecordsAfterCompletion(),

                    Tables\Actions\BulkAction::make('deactivate')
                        ->icon('heroicon-o-x-circle')
                        ->color('danger')
                        ->action(function ($records) {
                            foreach ($records as $record) {
                                $record->update(['is_active' => false]);
                            }
                        })
                        ->deselectRecordsAfterCompletion(),

                    Tables\Actions\DeleteBulkAction::make()
                        ->before(function ($records) {
                            foreach ($records as $record) {
                                $record->cleanupFiles();
                            }
                        }),
                ]),
            ])
            ->defaultSort('created_at', 'desc')
            ->groups([
                Tables\Grouping\Group::make('site_location')
                    ->label('Location')
                    ->collapsible(),
                    
                Tables\Grouping\Group::make('site_type')
                    ->getTitleFromRecordUsing(fn (ProductSite $record) => 
                        $record->product_link ? 'External Link' : 'Zip Upload'
                    )
                    ->label('Type')
                    ->collapsible(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProductSites::route('/'),
            'create' => Pages\CreateProductSite::route('/create'),
            'edit' => Pages\EditProductSite::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getNavigationBadgeColor(): string|array|null
    {
        return 'success';
    }
}