<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Setting;

class ViewServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // 
    }
    public function boot(): void
    {
       $setting = Setting::first();
       View::share('setting', $setting);
    }
}