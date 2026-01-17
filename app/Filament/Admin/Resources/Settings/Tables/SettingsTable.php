<?php

namespace App\Filament\Admin\Resources\Settings\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;


class SettingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('site_name')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email address')
                    ->searchable(),
                TextColumn::make('phone')
                    ->searchable(),
                TextColumn::make('address')
                    ->searchable(),
                TextColumn::make('facebook')
                    ->searchable(),
                TextColumn::make('twitter')
                    ->searchable(),
                TextColumn::make('instagram')
                    ->searchable(),
                TextColumn::make('linkedin')
                    ->searchable(),
                TextColumn::make('youtube')
                    ->searchable(),
                TextColumn::make('tiktok')
                    ->searchable(),
                TextColumn::make('whatsapp')
                    ->searchable(),
                TextColumn::make('telegram')
                    ->searchable(),
                TextColumn::make('snapchat')
                    ->searchable(),
                TextColumn::make('google_map')
                    ->searchable(),
                TextColumn::make('counter_1_title')
                    ->searchable(),
                TextColumn::make('counter_1_value')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('counter_2_title')
                    ->searchable(),
                TextColumn::make('counter_2_value')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('counter_3_title')
                    ->searchable(),
                TextColumn::make('counter_3_value')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('counter_4_title')
                    ->searchable(),
                TextColumn::make('counter_4_value')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                 ImageColumn::make('logo')
                    ->label('الشعار')
                    ->height(60)
                    ->square(),
                ImageColumn::make('background_image')
                    ->label('الخلفية')
                    ->height(60)
                    ->square(),
                ImageColumn::make('about_us')
                    ->label('عن مداد')
                    ->height(60)
                    ->square(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
