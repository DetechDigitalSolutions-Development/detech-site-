<?php

namespace App\Filament\Resources\BlogResource\Schemas;

use Filament\Forms;
use Filament\Forms\Form;

class BlogForm
{
    public static function configure(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('featured_img')
                    ->image()
                    ->nullable(),
                Forms\Components\RichEditor::make('content')
                    ->required(),
                Forms\Components\FileUpload::make('blog_img')
                    ->image()
                    ->multiple()
                    ->nullable(),
                Forms\Components\Textarea::make('quation_text')
                    ->nullable(),
                Forms\Components\TagsInput::make('categories')
                    ->required(),
                Forms\Components\TagsInput::make('tags')
                    ->nullable(),
            ]);
    }
}
