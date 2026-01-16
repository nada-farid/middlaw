<?php

namespace App\Filament\Admin\Resources\Services\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                TextInput::make('name')
                    ->label('اسم الخدمة')
                    ->columnSpanFull()
                    ->required(),
                Textarea::make('description')
                    ->label('وصف الخدمة')
                    ->columnSpanFull()
                    ->rows(10),
                RichEditor::make('content')
                    ->label('محتوى الخدمة')
                    ->columnSpanFull()
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'underline',
                        'strike',
                        'link',
                        'bulletList',
                        'orderedList',
                        'undo',
                        'redo',
                    ]),
                SpatieMediaLibraryFileUpload::make('service_icon')
                    ->collection('service_icon')
                    ->disk('public') 
                    ->image()
                    ->required(),
                SpatieMediaLibraryFileUpload::make('service_image')
                    ->collection('service_image')
                    ->disk('public') 
                    ->image()
                    ->required(),
            ]);
    }
}
