<?php

namespace App\Filament\Admin\Resources\Blogs\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\RichEditor;

class BlogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                RichEditor::make('content')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('by'),
                RichEditor::make('content_2')
                    ->columnSpanFull(),
                RichEditor::make('conclusion')
                    ->columnSpanFull(),
                SpatieMediaLibraryFileUpload::make('photo')
                    ->collection('photo')
                    ->disk('public') 
                    ->image()
                    ->required(),
                SpatieMediaLibraryFileUpload::make('inside_image')
                    ->collection('inside_image')
                    ->disk('public') 
                    ->image()
                    ->required(),
                SpatieMediaLibraryFileUpload::make('other_images')
                    ->collection('other_images')
                    ->disk('public') 
                    ->image()
                    ->required(),
                Select::make('category_id')
                    ->options(Category::all()->pluck('name', 'id'))
                    ->required(),
            ]);
    }
}
