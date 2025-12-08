<?php

namespace App\Filament\Resources;

use App\Models\ProductSite;
use App\Filament\Resources\ProductSiteResource\Pages;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductSiteResource extends Resource
{
    protected static ?string $model = ProductSite::class;

    protected static ?string $navigationIcon = 'heroicon-o-globe-alt';

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
                        
                        Forms\Components\TextInput::make('site_slug')
                            ->required()
                            ->maxLength(255)
                            ->label('Site Slug')
                            ->helperText('This will be used in the URL: ' . url('/') . '/{slug}')
                            ->hintAction(
                                Forms\Components\Actions\Action::make('generateSlug')
                                    ->label('Generate from Title')
                                    ->icon('heroicon-o-sparkles')
                                    ->action(function ($state, Forms\Set $set) {
                                        if (!empty($state)) {
                                            $slug = Str::slug($state);
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
                        
                        Forms\Components\Toggle::make('is_active')
                            ->label('Active')
                            ->default(true)
                            ->helperText('Make site accessible to users'),
                    ])
                    ->columns(2),
                
                Forms\Components\Section::make('Site Files')
                    ->schema([
                        Forms\Components\FileUpload::make('site_file')
                            ->label('Site Zip File')
                            ->acceptedFileTypes(['application/zip', 'application/x-zip-compressed'])
                            ->maxSize(102400) // 100MB
                            ->directory('product-sites/zips')
                            ->required()
                            ->live()
                            ->afterStateUpdated(function ($state, Forms\Set $set, $livewire) {
                                // Reset extracted path when new file is uploaded
                                $set('extracted_path', null);
                            })
                            ->helperText('Upload a zip file containing your website (max 100MB). Should include index.html/index.php in root.'),
                        
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
                            ->hidden(fn ($get) => !$get('site_file')),
                    ])
                    ->hidden(fn ($operation) => $operation === 'edit'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('product_title')
                    ->searchable()
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('site_slug')
                    ->label('Slug')
                    ->searchable()
                    ->sortable()
                    ->copyable()
                    ->copyMessage('Slug copied!')
                    ->copyMessageDuration(1500),
                
                Tables\Columns\BadgeColumn::make('site_location')
                    ->colors([
                        'success' => 'global',
                        'warning' => 'us',
                        'info' => 'eu',
                        'danger' => 'asia',
                        'gray' => 'custom',
                    ]),
                
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->label('Active'),
                
                Tables\Columns\TextColumn::make('site_file')
                    ->label('Zip File')
                    ->formatStateUsing(fn ($state) => $state ? '✅ Uploaded' : '❌ Missing')
                    ->alignCenter(),
                
                Tables\Columns\TextColumn::make('extracted_path')
                    ->label('Extracted')
                    ->formatStateUsing(fn ($state) => $state ? '✅ Yes' : '❌ No')
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
                
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Active Status'),
                
                Tables\Filters\TernaryFilter::make('has_extracted')
                    ->label('Extracted Files')
                    ->queries(
                        true: fn ($query) => $query->whereNotNull('extracted_path'),
                        false: fn ($query) => $query->whereNull('extracted_path'),
                    ),
            ])
            ->actions([
                Tables\Actions\Action::make('view_site')
                    ->label('View')
                    ->icon('heroicon-o-eye')
                    ->color('success')
                    ->url(fn (ProductSite $record) => $record->site_url)
                    ->openUrlInNewTab()
                    ->hidden(fn (ProductSite $record) => !$record->extracted_path),
                
                Tables\Actions\Action::make('extract')
                    ->label('Extract')
                    ->icon('heroicon-o-archive-box')
                    ->color('warning')
                    ->action(function (ProductSite $record) {
                        try {
                            if (!$record->site_file) {
                                throw new \Exception('No zip file uploaded');
                            }
                            
                            $zipPath = storage_path('app/public/' . $record->site_file);
                            
                            if (!file_exists($zipPath)) {
                                throw new \Exception('Zip file not found');
                            }
                            
                            $extractedPath = $record->processZipFile($zipPath);
                            
                            // Check if index file exists
                            $indexFile = $record->getIndexFilePath();
                            
                            if (!$indexFile) {
                                throw new \Exception('No index.html or index.php found in root directory');
                            }
                            
                            return redirect()->back()->with('success', 'Site extracted successfully!');
                            
                        } catch (\Exception $e) {
                            return redirect()->back()->with('error', 'Failed to extract: ' . $e->getMessage());
                        }
                    })
                    ->requiresConfirmation()
                    ->modalHeading('Extract Zip File')
                    ->modalSubheading('This will extract the uploaded zip file and make the site accessible.')
                    ->modalButton('Extract Now')
                    ->hidden(fn (ProductSite $record) => !$record->site_file || $record->extracted_path),
                
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->before(function (ProductSite $record) {
                        // This will trigger the model's cleanupFiles method
                    }),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->before(function ($records) {
                            foreach ($records as $record) {
                                $record->cleanupFiles();
                            }
                        }),
                ]),
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
}