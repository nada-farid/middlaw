<?php

namespace App\Filament\Admin\Resources\Contacts\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ContactForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label(__('filament.contact.fields.name')),
                TextInput::make('email')
                    ->label(__('filament.contact.fields.email'))
                    ->email()
                    ->required(),
                TextInput::make('phone')
                    ->label(__('filament.contact.fields.phone'))
                    ->tel(),
                Textarea::make('subject')
                    ->label(__('filament.contact.fields.subject'))
                    ->columnSpanFull(),
                Textarea::make('message')
                    ->label(__('filament.contact.fields.message'))
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
