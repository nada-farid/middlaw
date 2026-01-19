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
                TextInput::make('title_1')
                    ->label(__('filament.slider.fields.title_1')),
                  
                TextInput::make('title_2')
                    ->label(__('filament.slider.fields.title_2')),

                    
                TextInput::make('title_3')
                    ->label(__('filament.slider.fields.title_3')),

                TextInput::make('button_text')
                    ->label(__('filament.slider.fields.button_text')),
                TextInput::make('button_url')
                ->label(__('filament.slider.fields.button_url')),
                SpatieMediaLibraryFileUpload::make('slider_image')
                    ->label(__('filament.slider.fields.slider_image'))
                    ->collection('slider_image')
                    ->disk('public') 
                    ->image(),                
            ]);
    }
}
