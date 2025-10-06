<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Models\Blog;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Awcodes\FilamentTiptapEditor\TiptapEditor;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('featured_img')
                    ->directory('featured_img/blog') // Store in 'storage/app/public/thumbnails/posts'
                    ->image() // Restrict to image files
                    ->imageEditor()
                    ->previewable()
                    ->nullable()
                    ->downloadable()
                    ->deletable() // Allows deleting the file from the form
                    ->disk('public'), // Use the 'public' disk
                Forms\Components\RichEditor::make('content_section_1')
                    ->label('Content Section 1')
                    ->required(),
                Forms\Components\RichEditor::make('content_section_2')
                    ->label('Content Section 2')
                    ->required(),
                Forms\Components\FileUpload::make('blog_imgs')
                    ->image()
                    ->nullable()
                    ->multiple()
                    ->imageEditor()
                    ->previewable()
                    ->disk('public')
                    ->directory('media/blog')
                    ->downloadable()
                    ->deletable(),
                Forms\Components\Textarea::make('quote_text')
                    ->nullable(),
                Forms\Components\TagsInput::make('categories')
                    ->required(),
                Forms\Components\TagsInput::make('tags')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('featured_img'),
                Tables\Columns\TagsColumn::make('categories')
                    ->searchable(),
                Tables\Columns\TagsColumn::make('tags')
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
