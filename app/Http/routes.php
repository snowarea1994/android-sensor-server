<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('update',function(){return view('update');});

Route::get('get_location/{id}','userDataController@getLocation');
Route::get('get_health/{id}','userDataController@getHealth');


Route::post('update_data','userDataController@data');
Route::post('update_location','userDataController@location');
Route::post('update_health','userDataController@health');

// 认证路由...
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');

// 注册路由...
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');
