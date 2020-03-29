<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\Contract\FavoriteRepository;
use App\Repository\Eloquent\EloquentFavoriteRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            FavoriteRepository::class,
            EloquentFavoriteRepository::class
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
