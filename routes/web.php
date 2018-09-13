<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/', function () {
    return view('welcome');
});

Route::get('index/{id}', 'IndexController@index');


Route::post('main', 'IndexController@main');
Route::get('main', 'IndexController@main');
Route::get('form', 'IndexController@form');


Route::get('title', 'IndexController@user');
Route::post('form', 'IndexController@form');

Route::get('user', function()
{
  dump($name);
});
