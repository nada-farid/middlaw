<?php

namespace App\Filament\Admin\Resources\Consultings\Pages;

use App\Filament\Admin\Resources\Consultings\ConsultingResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListConsultings extends ListRecords
{
    protected static string $resource = ConsultingResource::class;

    public function getTitle(): string
    {
        return __('filament.consulting.title');
    }

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
