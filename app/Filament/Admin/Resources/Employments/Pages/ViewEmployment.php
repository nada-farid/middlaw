<?php

namespace App\Filament\Admin\Resources\Employments\Pages;

use App\Filament\Admin\Resources\Employments\EmploymentResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewEmployment extends ViewRecord
{
    protected static string $resource = EmploymentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
