<?php

namespace App\Filament\Resources\TeamResource\Schemas;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\FileUpload;

class TeamForm
{
    public static function configure(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('designation')
                    ->maxLength(255)
                    ->nullable(),
                FileUpload::make('profile_img')
                    ->image()
                    ->nullable(),
                Forms\Components\TextInput::make('year_of_exp')
                    ->numeric()
                    ->nullable(),
                Forms\Components\TextInput::make('tel_no')
                    ->tel()
                    ->nullable(),
                Forms\Components\TextInput::make('e_mail')
                    ->email()
                    ->nullable(),
                Forms\Components\TextInput::make('fb_url')
                    ->url()
                    ->nullable(),
                Forms\Components\TextInput::make('linkedin_url')
                    ->url()
                    ->nullable(),
                Forms\Components\TextInput::make('x_url')
                    ->url()
                    ->nullable(),
                Forms\Components\TextInput::make('insta_url')
                    ->url()
                    ->nullable(),
                RichEditor::make('summery')
                    ->nullable(),
                RichEditor::make('short_bio')
                    ->nullable(),
                RichEditor::make('about_me')
                    ->nullable(),
                RichEditor::make('skill_summary')
                    ->nullable(),
                TagsInput::make('skills')
                    ->placeholder('Add skills')
                    ->splitKeys(['Tab', ' '])
                    ->nullable(),
            ]);
    }
}
