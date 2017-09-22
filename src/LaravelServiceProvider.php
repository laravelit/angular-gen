<?php

namespace Laravelit\Generators;

use Illuminate\Support\ServiceProvider;

class LaravelServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/generators.php' => config_path('generators.php'),
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->commands([
            'Laravelit\Generators\Console\Commands\AngularConfig',
            'Laravelit\Generators\Console\Commands\AngularDialog',
            'Laravelit\Generators\Console\Commands\AngularComponent',
            'Laravelit\Generators\Console\Commands\AngularDirective',
            'Laravelit\Generators\Console\Commands\AngularPage',
            'Laravelit\Generators\Console\Commands\AngularFilter',
            'Laravelit\Generators\Console\Commands\AngularService',
            'Laravelit\Generators\Console\Commands\PwaManifest',
        ]);

        $this->mergeConfigFrom(__DIR__.'/../config/generators.php', 'generators');
    }
}
