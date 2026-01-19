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
                    ->label(__('filament.employment.fields.name'))
                    ->required(),
                TextInput::make('email')
                    ->label(__('filament.employment.fields.email'))
                    ->email()
                    ->required(),
                TextInput::make('phone')
                    ->label(__('filament.employment.fields.phone'))
                    ->tel()
                    ->required(),
                TextInput::make('address')
                    ->label(__('filament.employment.fields.address')),
                TextInput::make('position')
                    ->label(__('filament.employment.fields.position'))
                    ->required(),
                Textarea::make('experience')
                    ->label(__('filament.employment.fields.experience'))
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
