<?php


namespace App\Filament\Admin\Resources\Sliders\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Columns\ImageColumn;

class SlidersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('slider_image')
                ->label(__('filament.slider.fields.slider_image'))
                ->height(60)
                ->square(),
                

                TextColumn::make('title_1')
                    ->label(__('filament.slider.fields.title_1'))
                    ->searchable(),


                ToggleColumn::make('is_active')
                    ->label(__('filament.slider.fields.is_active')),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
