<?php

namespace App\Filament\Admin\Resources\Employments\Pages;

use App\Filament\Admin\Resources\Employments\EmploymentResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditEmployment extends EditRecord
{
    protected static string $resource = EmploymentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
