<?php

namespace App\Filament\Admin\Resources\Employments\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class EmploymentsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label(__('filament.employment.fields.name'))
                    ->searchable(),
                TextColumn::make('email')
                    ->label(__('filament.employment.fields.email'))
                    ->searchable(),
                TextColumn::make('phone')
                    ->label(__('filament.employment.fields.phone'))
                    ->searchable(),
                TextColumn::make('address')
                    ->label(__('filament.employment.fields.address'))
                    ->searchable(),
                TextColumn::make('position')
                    ->label(__('filament.employment.fields.position'))
                    ->searchable(),
                TextColumn::make('created_at')
                    ->label(__('filament.employment.fields.created_at'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->label(__('filament.employment.fields.updated_at'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
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
