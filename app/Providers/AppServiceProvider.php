<?php

/**
 * Pour eviter l'erreur sqlstate 42000 lors d'execution de migration sur vos tables
 * il indique seulement la taille de string de ou configurer direct dans 
 * AppServiceProvider dans le fonction boot par ce ligne de code ci-dessous :
 *      **use Illuminate\Support\Facades\Schema 
 *      **Schema::defaultStringLength(197)
 * Pour effaceer les cache de config par CLI artisan : php artisan config:cache 
 */

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
