<?php

namespace Petty\Providers;

use Illuminate\Support\ServiceProvider;

class HashidsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('hashids', function($app) {
            $key = config('app.key');
            return new Hashids($key, 2);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
