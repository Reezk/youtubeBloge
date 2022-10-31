<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }


    public function boot()
    {
        $settings = Setting::checkSettings();
        view()->share([
            'setting' => $settings
        ]);
    }
}
