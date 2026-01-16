<?php

namespace App\Filament\Admin\Resources\Sliders\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class SliderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                TextInput::make('title_1'),
                  
                TextInput::make('title_2'),
                    
                TextInput::make('title_3'),

                TextInput::make('button_text'),
                TextInput::make('button_url'),
                SpatieMediaLibraryFileUpload::make('slider_image')
                    ->collection('slider_image')
                    ->disk('public') 
                    ->image()
                    ->required(),                
            ]);
    }
}
