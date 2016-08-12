<?php

namespace Modules\User\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Description of MenuEventListender
 *
 * @author leemaousheng
 */
class SideMenuEventListener
{

    private $module;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //put your code here
    public function handleSideMenu($event)
    {
        $menus = array();
        $controller =  \Modules\User\Http\Controllers\UserController::class;
        $menu = new \App\SideMenu();
        $menu->addSideMenu(0, 'User', action($controller . '@index'), 'fa-file-text-o');

        $subMenu = new \App\SideMenu();
        $subMenu->addSideMenu(0, 'Products', action($controller . '@register'), 'fa-dot-circle-o');
        $menu->children[] = $subMenu;
        $subMenu = new \App\SideMenu();
        $subMenu->addSideMenu(1, 'Treatments', action($controller . '@forgot'), 'fa-dot-circle-o');
        $menu->children[] = $subMenu;
        $subMenu = new \App\SideMenu();
        $subMenu->addSideMenu(2, 'Credits', action($controller . '@profile'), 'fa-dot-circle-o');
        $menu->children[] = $subMenu;

        $menus[] = $menu;

        return $menus;
    }

}
