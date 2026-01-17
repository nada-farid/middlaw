<?php

namespace App\Filament\Admin\Resources\Consultings\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ConsultingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('question')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('answer')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
