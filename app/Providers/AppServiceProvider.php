<?php

namespace App\Providers;

use App\Repositories\HakAkses\HakAksesRepositories;
use App\Repositories\HakAkses\IHakAksesRepositories;
use App\Repositories\KelompokMenu\IKelompokMenuRepositories;
use App\Repositories\KelompokMenu\KelompokMenuRepositories;
use App\Services\Auth\AuthServices;
use App\Services\Auth\IAuthServices;
use App\Services\KelompokMenu\IKelompokMenuServices;
use App\Services\KelompokMenu\KelompokMenuServices;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(AuthServices::class, IAuthServices::class);
        $this->app->bind(KelompokMenuServices::class, IKelompokMenuServices::class);

        $this->app->bind(HakAksesRepositories::class, IHakAksesRepositories::class);
        $this->app->bind(KelompokMenuRepositories::class, IKelompokMenuRepositories::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
