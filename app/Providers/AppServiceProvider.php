<?php

namespace App\Providers;

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
        //Configuration pour l'utilisation de repositeries interface au lieu d'une classe pour les dépendance
        // d'information en Design Pattern Repositories dans le model en laravel
        $this->app->bind(
                'App\Repositories\abonnement\AbonnerRepositoriesInterface',
                'App\Repositories\abonnement\AbonnementRepositories'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
