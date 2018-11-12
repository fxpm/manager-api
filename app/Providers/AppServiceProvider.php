<?php

namespace FXM\Providers;

use Illuminate\Support\ServiceProvider;
use CloudCreativity\LaravelJsonApi\Facades\JsonApi;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        JsonApi::defaultApi('v1');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
