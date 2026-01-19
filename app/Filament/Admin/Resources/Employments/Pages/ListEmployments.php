<?php

namespace App\Filament\Admin\Resources\Employments\Pages;

use App\Filament\Admin\Resources\Employments\EmploymentResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListEmployments extends ListRecords
{
    protected static string $resource = EmploymentResource::class;

    public function getTitle(): string
    {
        return __('filament.employment.title');
    }

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
