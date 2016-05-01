<?php namespace Modules\User\Providers;
use Illuminate\Support\ServiceProvider;
use Modules\User\Authy;

/**
 * Created by PhpStorm.
 * User: leemaousheng
 * Date: 23/1/16
 * Time: 9:45 PM
 */

class AuthyServiceProvider extends ServiceProvider
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

    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app['authy'] = $this->app->share(function ($app) {
            $auth = $app['auth']->guard('web');
            return new Authy($auth, $app['router']);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('authy');
    }
}