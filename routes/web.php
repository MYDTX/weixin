<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('admin', 'Admin\IndexController');
Route::group(['middleware' => 'login'], function () {
    Route::resource('menu', 'Admin\MenuController');
    Route::resource('weiXin', 'Admin\WeiXinController');
    Route::resource('message', 'Admin\MessageController');
});

