<?php

Route::group(['middleware' => 'web', 'prefix' => 'user', 'namespace' => 'Modules\User\Http\Controllers'], function()
{
    Route::get('/', 'UserController@index');
    Route::post('/', 'UserController@try');
    Route::get('/register', 'UserController@register');
    Route::get('/forgot', 'UserController@forgot');
    Route::get('/profile', 'UserController@profile');
    Route::get('/test', 'UserController@test');
});
