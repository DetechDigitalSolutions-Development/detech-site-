<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder';

    protected static ?string $navigationGroup = 'Content';

    protected static ?string $navigationLabel = 'Projects';

    protected static ?string $modelLabel = 'Project';

    protected static ?string $pluralModelLabel = 'Projects';

    protected static ?string $slug = 'projects';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Project Basic Information
                Forms\Components\Section::make('Basic Information')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(function ($state, Forms\Set $set, $operation) {
                                if ($operation === 'create' || $operation === 'edit') {
                                    $set('slug', Str::slug($state));
                                }
                            })
                            ->columnSpanFull(),

                        Forms\Components\TextInput::make('slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true)
                            ->disabled(fn ($operation) => $operation === 'edit')
                            ->helperText('Auto-generated from title. Cannot be changed after creation.')
                            ->columnSpanFull(),

                        Forms\Components\Textarea::make('short_description')
                            ->required()
                            ->maxLength(500)
                            ->rows(3)
                            ->helperText('Brief overview of the project (max 500 characters)')
                            ->columnSpanFull(),
                    ]),

                // Project Details
                Forms\Components\Section::make('Project Details')
                    ->schema([
                        Forms\Components\Select::make('type')
                            ->options(Project::getTypeOptions())
                            ->required()
                            ->native(false)
                            ->default('website')
                            ->helperText('Select the type of project'),

                        Forms\Components\TextInput::make('industry')
                            ->maxLength(100)
                            ->nullable()
                            ->helperText('e.g., Technology, Healthcare, Finance, E-commerce'),

                        Forms\Components\TextInput::make('region')
                            ->maxLength(100)
                            ->nullable()
                            ->helperText('e.g., North America, Europe, Asia Pacific'),

                        Forms\Components\TextInput::make('project_duration')
                            ->maxLength(50)
                            ->nullable()
                            ->helperText('e.g., 3 months, 6 weeks, 1 year'),

                        Forms\Components\TextInput::make('client_name')
                            ->maxLength(255)
                            ->nullable(),

                        Forms\Components\TextInput::make('website')
                            ->url()
                            ->nullable()
                            ->maxLength(255)
                            ->helperText('Client website URL'),
                    ])->columns(2),

                // Media Section
                Forms\Components\Section::make('Media')
                    ->schema([
                        Forms\Components\FileUpload::make('featured_img')
                            ->label('Featured Image')
                            ->image()
                            ->directory('projects/featured')
                            ->disk('public')
                            ->nullable()
                            ->helperText('Main project image (Recommended: 1200x800px)')
                            ->columnSpanFull(),

                        Forms\Components\FileUpload::make('project_imgs')
                            ->label('Project Gallery Images')
                            ->image()
                            ->directory('projects/gallery')
                            ->disk('public')
                            ->multiple()
                            ->nullable()
                            ->reorderable()
                            ->appendFiles()
                            ->helperText('Additional project images for gallery (Multiple allowed)')
                            ->columnSpanFull(),
                    ]),

                // Content Sections
                Forms\Components\Section::make('Content')
                    ->schema([
                        Forms\Components\RichEditor::make('content_section_1')
                            ->label('Project Description')
                            ->toolbarButtons([
                                'bold', 'italic', 'underline',
                                'bulletList', 'orderedList',
                                'link', 'h2', 'h3',
                                'blockquote',
                            ])
                            ->nullable()
                            ->helperText('Detailed description of the project')
                            ->columnSpanFull(),

                        Forms\Components\RichEditor::make('content_section_2')
                            ->label('Technical Details / Features')
                            ->toolbarButtons([
                                'bold', 'italic', 'underline',
                                'bulletList', 'orderedList',
                                'link', 'h2', 'h3',
                                'blockquote',
                            ])
                            ->nullable()
                            ->helperText('Technical specifications, features, or additional details')
                            ->columnSpanFull(),
                    ]),

                // Categories & Metadata
                Forms\Components\Section::make('Metadata')
                    ->schema([
                        Forms\Components\TagsInput::make('categories')
                            ->separator(',')
                            ->suggestions([
                                'Web Development',
                                'Mobile Development',
                                'UI/UX Design',
                                'E-commerce',
                                'CMS',
                                'API Integration',
                                'System Architecture',
                                'Cloud Hosting',
                                'Responsive Design',
                                'Custom Software',
                            ])
                            ->nullable()
                            ->helperText('Add relevant categories (Press enter to separated)')
                            ->columnSpanFull(),

                        Forms\Components\Hidden::make('owner')
                            ->default('')
                            ->dehydrated(true),

                        Forms\Components\Hidden::make('start_date')
                            ->default(null)
                            ->dehydrated(true),

                        Forms\Components\Hidden::make('end_date')
                            ->default(null)
                            ->dehydrated(true),

                        Forms\Components\Hidden::make('challenge_title')
                            ->default('')
                            ->dehydrated(true),

                        Forms\Components\Hidden::make('challenge_points')
                            ->default(null)
                            ->dehydrated(true),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('featured_img')
                    ->label('Image')
                    ->circular()
                    ->defaultImageUrl(fn ($record) => 'https://ui-avatars.com/api/?name=' . urlencode($record->title) . '&color=FFFFFF&background=205781'),

                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->limit(50)
                    ->tooltip(function (Tables\Columns\TextColumn $column): ?string {
                        $state = $column->getState();
                        if (strlen($state) <= 50) {
                            return null;
                        }
                        return $state;
                    }),

                Tables\Columns\TextColumn::make('type')
                    ->badge()
                    ->color(fn ($state) => match ($state) {
                        'website' => 'success',
                        'web_system' => 'primary',
                        'mobile_app' => 'info',
                        'desktop_app' => 'warning',
                        default => 'gray',
                    })
                    ->formatStateUsing(fn ($state) => Project::getTypeOptions()[$state] ?? $state)
                    ->sortable(),

                Tables\Columns\TextColumn::make('client_name')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: false),

                Tables\Columns\TextColumn::make('industry')
                    ->searchable()
                    ->badge()
                    ->color('gray')
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('region')
                    ->searchable()
                    ->badge()
                    ->color('gray')
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('project_duration')
                    ->label('Duration')
                    ->badge()
                    ->color('success')
                    ->toggleable(isToggledHiddenByDefault: false),

                Tables\Columns\TagsColumn::make('categories')
                    ->separator(',')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('M d, Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime('M d, Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('type')
                    ->options(Project::getTypeOptions())
                    ->multiple()
                    ->preload(),

                Tables\Filters\SelectFilter::make('industry')
                    ->options(fn () => Project::query()
                        ->distinct()
                        ->whereNotNull('industry')
                        ->pluck('industry', 'industry')
                        ->toArray())
                    ->multiple()
                    ->searchable()
                    ->preload(),

                Tables\Filters\SelectFilter::make('region')
                    ->options(fn () => Project::query()
                        ->distinct()
                        ->whereNotNull('region')
                        ->pluck('region', 'region')
                        ->toArray())
                    ->multiple()
                    ->searchable()
                    ->preload(),

                Tables\Filters\Filter::make('has_gallery_images')
                    ->label('Has Gallery Images')
                    ->query(fn ($query) => $query->whereNotNull('project_imgs')),
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make()
                        ->icon('heroicon-o-eye')
                        ->color('info'),
                    
                    Tables\Actions\EditAction::make()
                        ->icon('heroicon-o-pencil')
                        ->color('primary'),
                    
                    Tables\Actions\DeleteAction::make()
                        ->icon('heroicon-o-trash')
                        ->color('danger'),
                    
                    Tables\Actions\Action::make('preview')
                        ->label('View on Website')
                        ->icon('heroicon-o-arrow-top-right-on-square')
                        ->color('success')
                        ->url(fn ($record) => route('projects.show', $record->slug))
                        ->openUrlInNewTab(),
                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\BulkAction::make('change_type')
                        ->label('Change Type')
                        ->icon('heroicon-o-arrows-right-left')
                        ->form([
                            Forms\Components\Select::make('type')
                                ->options(Project::getTypeOptions())
                                ->required()
                                ->default('website'),
                        ])
                        ->action(function ($records, array $data) {
                            $records->each->update(['type' => $data['type']]);
                        }),
                    
                    Tables\Actions\BulkAction::make('add_category')
                        ->label('Add Category')
                        ->icon('heroicon-o-tag')
                        ->form([
                            Forms\Components\TextInput::make('category')
                                ->label('Category')
                                ->required()
                                ->maxLength(50),
                        ])
                        ->action(function ($records, array $data) {
                            foreach ($records as $record) {
                                $categories = $record->categories ?? [];
                                if (!in_array($data['category'], $categories)) {
                                    $categories[] = $data['category'];
                                    $record->update(['categories' => $categories]);
                                }
                            }
                        }),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make()
                    ->icon('heroicon-o-plus'),
            ])
            ->emptyStateDescription('No projects yet. Create your first project to get started.')
            ->emptyStateIcon('heroicon-o-folder')
            ->defaultSort('created_at', 'desc')
            ->persistSortInSession()
            ->persistColumnSearchesInSession()
            ->deferLoading();
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

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return 'primary';
    }
}