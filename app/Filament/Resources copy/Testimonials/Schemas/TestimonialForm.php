<?php

namespace App\Filament\Resources\TestimonialResource\Schemas;

use Filament\Forms;
use Filament\Forms\Form;

class TestimonialForm
{
    public static function configure(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('designation')
                    ->nullable()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('profile_img')
                    ->image()
                    ->nullable(),
                Forms\Components\Textarea::make('comments')
                    ->required(),
            ]);
    }
}
