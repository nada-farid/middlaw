<?php

namespace App\Filament\Admin\Resources\Employments\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class EmploymentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('phone')
                    ->tel()
                    ->required(),
                TextInput::make('address'),
                TextInput::make('position')
                    ->required(),
                Textarea::make('experience')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
