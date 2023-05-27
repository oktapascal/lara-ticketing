<?php

namespace App\Providers;

use App\Repositories\HakAkses\HakAksesRepositories;
use App\Repositories\HakAkses\IHakAksesRepositories;
use App\Services\Auth\AuthServices;
use App\Services\Auth\IAuthServices;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(AuthServices::class, IAuthServices::class);

        $this->app->bind(HakAksesRepositories::class, IHakAksesRepositories::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
