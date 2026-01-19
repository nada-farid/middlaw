<?php

namespace App\Filament\Admin\Resources\Clients\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class ClientForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label(__('filament.client.fields.name')),
                TextInput::make('link')
                    ->label(__('filament.client.fields.link')),
                SpatieMediaLibraryFileUpload::make('image')
                    ->label(__('filament.client.fields.image'))
                    ->collection('image')
                    ->disk('public') 
                    ->image()
                    ->required(),
            ]);
    }
}
