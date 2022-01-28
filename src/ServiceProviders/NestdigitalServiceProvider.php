<?php

namespace Nestdigital\Asaas\ServiceProviders;

use Illuminate\Support\ServiceProvider;
use Nestdigital\Asaas\Asaas;

class NestdigitalServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Boot the package.
     */
    public function boot()
    {
        /*
        |--------------------------------------------------------------------------
        | Publish the Config file from the Package to the App directory
        |--------------------------------------------------------------------------
        */
        $this->configPublisher();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        /*
        |--------------------------------------------------------------------------
        | Implementation Bindings
        |--------------------------------------------------------------------------
        */
        $this->implementationBindings();
    }

    /**
     * Implementation Bindings.
     */
    private function implementationBindings()
    {
        $this->app->bind(
            Asaas::class
        );
    }

    /**
     * Publish the Config file from the Package to the App directory.
     */
    private function configPublisher()
    {
        // When users execute Laravel's vendor:publish command, the config file will be copied to the specified location
        $this->publishes([
            __DIR__.'/../Config/asaas.php' => config_path('asaas.php'),
        ]);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
