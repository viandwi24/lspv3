<?php

namespace App\Providers;

use App\Models\Setting;
use Exception;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadWebConfig();
    }

    /** load web config */
    private function loadWebConfig()
    {
        try {
            $settings = Cache::remember('settings', 10, function () {
                return Setting::all()
                    ->keyBy('name')
                    ->transform(function ($setting) { return $setting->value; })
                    ->toArray();
            });
            config([ 'settings' => $settings ]);
            config()->set('settings.judul', "LSP " . config('settings.lembaga'));
        } catch (Exception $e) {
        }
    }
}
