<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $setting = Setting::firstOrFail();
        View::share('name', $setting->name);
        View::share('logo', $setting->logo);
        View::share('noti_email', $setting->noti_email);
        View::share('contact', $setting->contact);
        View::share('countdown', $setting->countdown);
        View::share('center_logos', $setting->footer['center_logos']);
        View::share('end_logo', $setting->footer['end_logo']);
    }
}
