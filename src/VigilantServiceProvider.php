<?php
namespace AxolotlInteractive\Laravel\Vigilant;

use Illuminate\Support\ServiceProvider;

/**
 * Created by PhpStorm.
 * User: bryce
 * Date: 5/2/16
 * Time: 4:56 PM
 */

class VigilantServiceProvider extends ServiceProvider
{


    public function boot()
    {
        $this->publishes([__DIR__ . '/../config/config.php' => config_path('vigilant.php')], 'vigilant');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // TODO: Implement register() method.
    }

    /**
     * @return array
     */
    public function provides()
    {
        return ['vigilant'];
    }
}