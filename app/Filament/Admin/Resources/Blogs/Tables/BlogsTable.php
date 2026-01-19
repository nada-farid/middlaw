<?php

namespace App\Filament\Admin\Resources\Blogs\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BlogsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable(),
                TextColumn::make('by')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                ImageColumn::make('photo')
                    ->label(__('filament.blog.fields.photo'))
                    ->height(60)
                    ->square(),
                ImageColumn::make('inside_image')
                    ->label(__('filament.blog.fields.inside_image'))
                    ->height(60)
                    ->square(),
                ImageColumn::make('other_images')
                    ->label(__('filament.blog.fields.other_images'))
                    ->height(60)
                    ->square(),
                TextColumn::make('category.name')
                    ->label(__('filament.blog.fields.category'))
                    ->searchable(),
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
