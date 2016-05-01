<?php

namespace Modules\Inventory\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class InventoryController extends Controller
{

    public function index()
    {
        return view('inventory::index');
    }
    
    public function getInventoryModule()
    {
        return 'Inventory Module';
    }

}
