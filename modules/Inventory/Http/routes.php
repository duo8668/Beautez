<?php

Route::group(['middleware' => 'web', 'prefix' => 'inventory', 'namespace' => 'Modules\Inventory\Http\Controllers'], function()
{
    //Route::resource('/', 'InventoryController');
    Route::get('/', 'InventoryController@index');
    
    Route::get('/invModule', 'InventoryController@getInventoryModule');
});
