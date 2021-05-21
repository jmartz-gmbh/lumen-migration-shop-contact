<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class ShopMigrationProvider
 * @package App\Providers
 */
class ContactMigrationProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');
    }
}
