<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;

class SideMenuServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(DispatcherContract $events)
    {
        //
        view()->composer('includes.menus.sidemenu', function($view)use($events)
        {
            $returnResults = $events->fire(new \App\Events\SideMenuBuildingEvent());
            $inResult = array();
            $sideMenus = array();
            foreach ($returnResults as $returnResult)
            {
                foreach ($returnResult as $value)
                {
                    $sideMenus[] = ($value);
                }
            }
            // $sideMenus = collect($inResult);
             //dd($sideMenus);
            return $view->with(compact('sideMenus'));
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
