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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/bricks', 'HomeController@bricks');

Route::get('/page1', 'HomeController@page1');

Route::post('/page1/add', 'HomeController@page1_add');

Route::get('/page1/delete/{id}', 'HomeController@page1_delete');

Route::post('/page1/update/{id}', 'HomeController@page1_update');