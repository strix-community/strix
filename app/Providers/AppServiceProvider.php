<?php

namespace Strix\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends StrixServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        parent::register();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        parent::boot();
    }
}
