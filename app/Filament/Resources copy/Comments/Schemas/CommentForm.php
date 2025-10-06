<?php

namespace App\Filament\Resources\CommentResource\Schemas;

use Filament\Forms;
use Filament\Forms\Form;

class CommentForm
{
    public static function configure(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('blog_id')
                    ->relationship('blog', 'title')
                    ->required(),
                Forms\Components\Select::make('reply_id')
                    ->relationship('parentComment', 'user_name')
                    ->label('Replying to')
                    ->nullable(),
                Forms\Components\TextInput::make('user_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('user_email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('comment_text')
                    ->required(),
                Forms\Components\Toggle::make('is_approved')
                    ->required(),
            ]);
    }
}
