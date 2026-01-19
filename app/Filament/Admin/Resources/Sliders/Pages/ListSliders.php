<?php

namespace App\Filament\Admin\Resources\Sliders\Pages;

use App\Filament\Admin\Resources\Sliders\SliderResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSliders extends ListRecords
{
    protected static string $resource = SliderResource::class;

    public function getTitle(): string
    {
        return __('filament.slider.title');
    }
    

    protected function getHeaderActions(): array
    {
        
        return [
            CreateAction::make(),
        ];
    }
}
