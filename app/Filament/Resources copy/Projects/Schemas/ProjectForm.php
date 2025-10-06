<?php

namespace App\Filament\Resources\ProjectResource\Schemas;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\DatePicker;

class ProjectForm
{
    public static function configure(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                FileUpload::make('featured_img')
                    ->image()
                    ->nullable(),
                RichEditor::make('content')
                    ->required(),
                FileUpload::make('project_imgs')
                    ->multiple()
                    ->image()
                    ->nullable(),
                Forms\Components\TextInput::make('challenge_title')
                    ->nullable(),
                TagsInput::make('challenge_points')
                    ->placeholder('Add points')
                    ->splitKeys(['Tab', ' '])
                    ->nullable(),
                Forms\Components\TextInput::make('client_name')
                    ->nullable(),
                DatePicker::make('start_date')
                    ->nullable(),
                DatePicker::make('end_date')
                    ->nullable(),
                Forms\Components\TextInput::make('owner')
                    ->nullable(),
                TagsInput::make('categories')
                    ->placeholder('Add categories')
                    ->splitKeys(['Tab', ' '])
                    ->nullable(),
                Forms\Components\TextInput::make('website')
                    ->url()
                    ->nullable(),
            ]);
    }
}
