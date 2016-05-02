<?php
use Illuminate\Support\ServiceProvider;

/**
 * Created by PhpStorm.
 * User: bryce
 * Date: 5/2/16
 * Time: 4:56 PM
 */

class LaravelVigilantServiceProvider extends ServiceProvider
{

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