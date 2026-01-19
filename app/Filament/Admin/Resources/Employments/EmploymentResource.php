<?php

namespace App\Filament\Admin\Resources\Employments;

use App\Filament\Admin\Resources\Employments\Pages\CreateEmployment;
use App\Filament\Admin\Resources\Employments\Pages\EditEmployment;
use App\Filament\Admin\Resources\Employments\Pages\ListEmployments;
use App\Filament\Admin\Resources\Employments\Pages\ViewEmployment;
use App\Filament\Admin\Resources\Employments\Schemas\EmploymentForm;
use App\Filament\Admin\Resources\Employments\Schemas\EmploymentInfolist;
use App\Filament\Admin\Resources\Employments\Tables\EmploymentsTable;
use App\Models\Employment;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class EmploymentResource extends Resource
{
    protected static ?string $model = Employment::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Employment';

    public static function getNavigationLabel(): string
    {
        return __('filament.employment.title');
    }

    public static function form(Schema $schema): Schema
    {
        return EmploymentForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return EmploymentInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EmploymentsTable::configure($table);
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
            'index' => ListEmployments::route('/'),
            'create' => CreateEmployment::route('/create'),
            'view' => ViewEmployment::route('/{record}'),
            'edit' => EditEmployment::route('/{record}/edit'),
        ];
    }
}
