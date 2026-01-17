<?php

namespace App\Filament\Admin\Resources\Consultings;

use App\Filament\Admin\Resources\Consultings\Pages\CreateConsulting;
use App\Filament\Admin\Resources\Consultings\Pages\EditConsulting;
use App\Filament\Admin\Resources\Consultings\Pages\ListConsultings;
use App\Filament\Admin\Resources\Consultings\Schemas\ConsultingForm;
use App\Filament\Admin\Resources\Consultings\Tables\ConsultingsTable;
use App\Models\Consulting;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ConsultingResource extends Resource
{
    protected static ?string $model = Consulting::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Consulting';

    public static function form(Schema $schema): Schema
    {
        return ConsultingForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ConsultingsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListConsultings::route('/'),
            'create' => CreateConsulting::route('/create'),
            'edit' => EditConsulting::route('/{record}/edit'),
        ];
    }
}
