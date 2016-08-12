<?php

namespace Modules\Inventory\Listeners;

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
    private $rootNamespace;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
        $this->rootNamespace = \Illuminate\Support\Facades\Request::root();
    }

    //put your code here
    public function handleSideMenu($event)
    {
        $menus = array();
        $controller = \Modules\Inventory\Http\Controllers\InventoryController::class;
        $menu = new \App\SideMenu();

        $menu->addSideMenu(0, 'Inventory', action($controller . '@index'), 'fa-file-text-o');

        $subMenu = new \App\SideMenu();
        $subMenu->addSideMenu(0, 'Products', action($controller . '@getInventoryModule'), 'fa-dot-circle-o');
        $menu->children[] = $subMenu;
        $subMenu = new \App\SideMenu();
        $subMenu->addSideMenu(1, 'Treatments', action($controller . '@getInventoryModule'), 'fa-dot-circle-o');
        $menu->children[] = $subMenu;
        $subMenu = new \App\SideMenu();
        $subMenu->addSideMenu(2, 'Credits', action($controller . '@getInventoryModule'), 'fa-dot-circle-o');
        $menu->children[] = $subMenu;
        $subMenu = new \App\SideMenu();
        $subMenu->addSideMenu(3, 'Course', action($controller . '@getInventoryModule'), 'fa-dot-circle-o');
        $menu->children[] = $subMenu;

        $menus[] = $menu;

        return $menus;
    }

}
