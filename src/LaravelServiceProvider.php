<?php

namespace Afroware\Generators;

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
            'Afroware\Generators\Console\Commands\AngularConfig',
            'Afroware\Generators\Console\Commands\AngularDialog',
            'Afroware\Generators\Console\Commands\AngularComponent',
            'Afroware\Generators\Console\Commands\AngularDirective',
            'Afroware\Generators\Console\Commands\AngularPage',
            'Afroware\Generators\Console\Commands\AngularFilter',
            'Afroware\Generators\Console\Commands\AngularService',
            'Afroware\Generators\Console\Commands\PwaManifest',
        ]);

        $this->mergeConfigFrom(__DIR__.'/../config/generators.php', 'generators');
    }
}
