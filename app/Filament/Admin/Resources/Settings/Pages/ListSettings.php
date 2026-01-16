<?php

namespace App\Filament\Admin\Resources\Settings\Pages;

use App\Filament\Admin\Resources\Settings\SettingResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use App\Models\Setting;

class ListSettings extends ListRecords
{
    protected static string $resource = SettingResource::class;

    public function mount(): void
    {
        $setting = Setting::firstOrCreate([]);
        redirect(static::getResource()::getUrl('edit', [
            'record' => $setting->id,
        ]));
    }
}
