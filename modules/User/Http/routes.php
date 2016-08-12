<?php

Route::group(['middleware' => ['web', 'jsonApi'], 'prefix' => 'user', 'namespace' => 'Modules\User\Http\Controllers'], function()
{
    //* Login & HomePage
    Route::get('/', 'UserController@index');
    Route::get('/login', 'UserController@login');
    Route::get('/profile', 'UserController@profile');

    //* Register
    Route::get('/register', 'UserController@register');
    Route::post('/registerUser', 'UserController@registerUser');
    Route::post('/validateUserRegisteration', 'UserController@validateUserRegisteration');

    //*Retrieve Password
    Route::get('/forgot', 'UserController@forgot');

    Route::get('/test', 'UserController@test');
});

Route::group(['middleware' => 'jsonApi', 'prefix' => 'user', 'namespace' => 'Modules\User\Http\Controllers'], function()
{
    //* Login & HomePage 
});
