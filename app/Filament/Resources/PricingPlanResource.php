<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PricingPlanResource\Pages;
use App\Models\PricingPlan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PricingPlanResource extends Resource
{
    protected static ?string $model = PricingPlan::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';

    protected static ?string $navigationGroup = 'Content Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Plan Details')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Basic Plan'),
                        
                        Forms\Components\Textarea::make('short_description')
                            ->nullable()
                            ->placeholder('Pricing plan for Digital Transformation')
                            ->rows(2),
                        
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('price')
                                    ->required()
                                    ->numeric()
                                    ->prefix('$')
                                    ->placeholder('29.00'),
                                
                                Forms\Components\TextInput::make('currency_symbol')
                                    ->default('$')
                                    ->maxLength(5)
                                    ->placeholder('$'),
                            ]),
                        
                        Forms\Components\Select::make('billing_type')
                            ->options([
                                'monthly' => 'Monthly',
                                'yearly' => 'Yearly',
                                'both' => 'Both (Monthly & Yearly)',
                            ])
                            ->default('both')
                            ->required(),
                        
                        Forms\Components\TextInput::make('sort_order')
                            ->numeric()
                            ->default(0)
                            ->required(),
                    ]),
                
                Forms\Components\Section::make('Features')
                    ->schema([
                        Forms\Components\Repeater::make('features')
                            ->schema([
                                Forms\Components\TextInput::make('feature')
                                    ->required()
                                    ->placeholder('Community Support')
                                    ->maxLength(255),
                            ])
                            ->defaultItems(5)
                            ->itemLabel(fn (array $state): ?string => $state['feature'] ?? null)
                            ->collapsible()
                            ->cloneable()
                            ->grid(1),
                    ]),
                
                Forms\Components\Section::make('Status')
                    ->schema([
                        Forms\Components\Toggle::make('is_active')
                            ->default(true)
                            ->inline(false)
                            ->label('Active Plan'),
                        
                        Forms\Components\Toggle::make('is_highlighted')
                            ->default(false)
                            ->inline(false)
                            ->label('Highlighted Plan (Will show as active in UI)'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('formatted_price')
                    ->label('Price')
                    ->sortable(['price']),
                
                Tables\Columns\TextColumn::make('billing_type')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'monthly' => 'info',
                        'yearly' => 'success',
                        'both' => 'warning',
                        default => 'gray',
                    })
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'monthly' => 'Monthly',
                        'yearly' => 'Yearly',
                        'both' => 'Monthly & Yearly',
                        default => $state,
                    }),
                
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->label('Active'),
                
                Tables\Columns\IconColumn::make('is_highlighted')
                    ->boolean()
                    ->label('Highlighted'),
                
                Tables\Columns\TextColumn::make('sort_order')
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('billing_type')
                    ->options([
                        'monthly' => 'Monthly',
                        'yearly' => 'Yearly',
                        'both' => 'Both',
                    ]),
                
                Tables\Filters\TernaryFilter::make('is_active'),
                Tables\Filters\TernaryFilter::make('is_highlighted'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('sort_order')
            ->reorderable('sort_order');
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPricingPlans::route('/'),
            'create' => Pages\CreatePricingPlan::route('/create'),
            'edit' => Pages\EditPricingPlan::route('/{record}/edit'),
        ];
    }
}