<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
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
        // Compatibilidad con MySQL/MariaDB: índice máximo ~767 bytes con utf8mb4 (191*4=764)
        Schema::defaultStringLength(191);
    }
}
