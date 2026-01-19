<?php

namespace App\Filament\Admin\Resources\Settings\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\RichEditor;

class SettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('site_name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address'),
                TextInput::make('phone')
                    ->tel(),
                TextInput::make('address'),
                Textarea::make('description')
                    ->columnSpanFull(),
                RichEditor::make('about_us')
                    ->columnSpanFull(),
                Textarea::make('footer_text')
                    ->columnSpanFull(),
                Textarea::make('contact_us')
                    ->columnSpanFull(),
                Textarea::make('letters_text')
                    ->columnSpanFull(),
                Textarea::make('vision')
                    ->columnSpanFull(),
                Textarea::make('mission')
                    ->columnSpanFull(),
                RichEditor::make('values')
                    ->columnSpanFull(),
                Textarea::make('goals')
                    ->columnSpanFull(),
                TextInput::make('facebook'),
                TextInput::make('twitter'),
                TextInput::make('instagram'),
                TextInput::make('linkedin'),
                TextInput::make('youtube'),
                TextInput::make('tiktok'),
                TextInput::make('whatsapp'),
                TextInput::make('telegram')
                    ->tel(),
                TextInput::make('snapchat'),
                TextInput::make('google_map'),
                TextInput::make('counter_1_title'),
                TextInput::make('counter_1_value')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('counter_2_title'),
                TextInput::make('counter_2_value')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('counter_3_title'),
                TextInput::make('counter_3_value')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('counter_4_title'),
                TextInput::make('counter_4_value')
                    ->required()
                    ->numeric()
                    ->default(0),
               SpatieMediaLibraryFileUpload::make('logo')
                    ->collection('logo')
                    ->disk('public')
                    ->image(),
                SpatieMediaLibraryFileUpload::make('background_image')
                    ->collection('background_image')
                    ->disk('public')
                    ->image(),
                SpatieMediaLibraryFileUpload::make('about_us_image')
                    ->collection('about_us_image')
                    ->disk('public')
                    ->image(),
                SpatieMediaLibraryFileUpload::make('download_pdf')
                    ->label(__('filament.setting.fields.download_pdf'))
                    ->collection('download_pdf')
                    ->disk('public')
                    ->file(),
            ]);
    }
}
