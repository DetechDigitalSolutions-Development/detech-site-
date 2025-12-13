<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SalaryGuideResource\Pages;
use App\Models\SalaryGuide;
use App\Models\ExperienceLevel;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;

class SalaryGuideResource extends Resource
{
    protected static ?string $model = SalaryGuide::class;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'Salary Guide';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('role')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true),
                Forms\Components\TextInput::make('order')
                    ->numeric()
                    ->default(0),
                Forms\Components\Toggle::make('is_active')
                    ->default(true),
                
                Forms\Components\Section::make('Salary Rates')
                    ->schema([
                        Forms\Components\Repeater::make('salaryRates')
                            ->relationship()
                            ->schema([
                                Forms\Components\Select::make('experience_level_id')
                                    ->label('Experience Level')
                                    ->options(ExperienceLevel::all()->pluck('name', 'id'))
                                    ->required(),
                                Forms\Components\TextInput::make('min_rate')
                                    ->numeric()
                                    ->required()
                                    ->prefix('₱'),
                                Forms\Components\TextInput::make('max_rate')
                                    ->numeric()
                                    ->required()
                                    ->prefix('₱'),
                            ])
                            ->columns(3)
                            ->defaultItems(0),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('role')->sortable(),
                Tables\Columns\TextColumn::make('salaryRates_count')
                    ->counts('salaryRates')
                    ->label('Rate Entries'),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('order')->sortable(),
            ])
            ->filters([])
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
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSalaryGuides::route('/'),
            'create' => Pages\CreateSalaryGuide::route('/create'),
            'edit' => Pages\EditSalaryGuide::route('/{record}/edit'),
        ];
    }

    // app/Filament/Resources/CurrencyResource.php (or any resource)
public static function getNavigationBadge(): ?string
{
    return 'View';
}

public static function getNavigationBadgeColor(): ?string
{
    return 'success';
}

// Add this method to add a link to the public page
public static function getNavigationItems(): array
{
    return array_merge(
        parent::getNavigationItems(),
        [
            \Filament\Navigation\NavigationItem::make()
                ->label('View Public Page')
                ->icon('heroicon-o-eye')
                ->url('/salary-guide', shouldOpenInNewTab: true)
                ->sort(999),
        ]
    );
}
}