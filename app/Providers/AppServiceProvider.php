<?php

namespace App\Providers;

use App\Models\Headline;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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

        Blade::if('hasPermission', function (string $expression) {

            if (empty($expression) || !Auth::check()) return false;

            $userPermissions = Cache::remember('user-permissions-' . Auth::id(), now()->addWeek(), function () {
                return Auth::user()->allPermissions()->pluck('name')->toArray();
            });

            if (strpos($expression, '|') === false) return in_array($expression, $userPermissions);

            $permissions = explode('|', $expression);

            foreach ($permissions as $permission) {
                if (in_array($permission, $userPermissions)) return true;
            }

            return false;
        });
    }
}