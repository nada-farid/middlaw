<?php

namespace App\Filament\Admin\Resources\News\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class NewsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                Textarea::make('short_description')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('address'),
                Toggle::make('is_active')
                    ->required(),
                TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(0),
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
            ]);
    }
}
