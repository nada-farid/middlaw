<?php

namespace App\Filament\Admin\Resources\Services\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use pxlrbt\FilamentExcel\Actions\Tables\ExportAction;
use pxlrbt\FilamentExcel\Exports\ExcelExport;;


class ServicesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                //
                ImageColumn::make('service_icon')
                ->label('الأيقونة')
                ->height(60)
                ->square(),
                TextColumn::make('name')
                ->label('اسم الخدمة')
                ->searchable(),
                TextColumn::make('description')
                ->label('وصف الخدمة')
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
                    ExportAction::make(),
                ]),
            ])
            ->headerActions([ 
                ExportAction::make()
                    ->label('تصدير ')
                    ->exports([
                        ExcelExport::make()
                            ->fromTable()  
                            ->withFilename('Services'),
                    ]),
            ]);
    }
}
