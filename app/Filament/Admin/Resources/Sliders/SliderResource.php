<?php

namespace App\Filament\Admin\Resources\Sliders;

use App\Filament\Admin\Resources\Sliders\Pages\CreateSlider;
use App\Filament\Admin\Resources\Sliders\Pages\EditSlider;
use App\Filament\Admin\Resources\Sliders\Pages\ListSliders;
use App\Filament\Admin\Resources\Sliders\Pages\ViewSlider;
use App\Filament\Admin\Resources\Sliders\Schemas\SliderForm;
use App\Filament\Admin\Resources\Sliders\Schemas\SliderInfolist;
use App\Filament\Admin\Resources\Sliders\Tables\SlidersTable;
use App\Models\Slider;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;


class SliderResource extends Resource
{
    protected static ?string $model = Slider::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedPhoto;

    protected static ?string $recordTitleAttribute = 'Slider';

    protected static ?int $navigationSort = 2;

    public static function getNavigationLabel(): string
    {
        return __('filament.slider.title');
    }

    public static function form(Schema $schema): Schema
    {
        return SliderForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return SliderInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SlidersTable::configure($table);
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
            'index' => ListSliders::route('/'),
            'create' => CreateSlider::route('/create'),
            'view' => ViewSlider::route('/{record}'),
            'edit' => EditSlider::route('/{record}/edit'),
        ];
    }
}
