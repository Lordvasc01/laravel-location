<?php

namespace App\Providers;

use App\Models\Brand;
use App\Repositories\BrandEloquentRepository;
use App\Repositories\Interfaces\BrandRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            BrandRepository::class,
            function ($app) {
                return new BrandEloquentRepository(new Brand());
            }
        );
    }
}
