<?php

namespace App\Filament\Admin\Resources\Consultings\Pages;

use App\Filament\Admin\Resources\Consultings\ConsultingResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditConsulting extends EditRecord
{
    protected static string $resource = ConsultingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
