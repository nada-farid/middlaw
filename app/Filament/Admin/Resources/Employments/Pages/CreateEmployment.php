<?php

namespace App\Filament\Admin\Resources\Employments\Pages;

use App\Filament\Admin\Resources\Employments\EmploymentResource;
use Filament\Resources\Pages\CreateRecord;

class CreateEmployment extends CreateRecord
{
    protected static string $resource = EmploymentResource::class;
}
