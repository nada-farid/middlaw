<?php

namespace App\Filament\Admin\Resources\Sliders\Pages;

use App\Filament\Admin\Resources\Sliders\SliderResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewSlider extends ViewRecord
{
    protected static string $resource = SliderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
