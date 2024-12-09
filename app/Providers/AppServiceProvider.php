<?php

namespace App\Providers;

use App\Models\Headline;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {}

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->share('title', '-' . trans('sidebar.dashboard'));

        app()->singleton('headlines', fn() => collect(Headline::all() ?? []));
        app()->singleton('settings', fn() => Setting::getAllSettings());
    }
}
