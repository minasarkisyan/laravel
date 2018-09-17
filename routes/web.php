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
Route::get('form', 'IndexController@form')->name('form');


Route::get('title', 'IndexController@user');
//Route::post('form', 'IndexController@form');

Route::get('user', function()
{
  dump($name);
});

Route::get('names', 'NamesController@index');
Route::get('names/update', 'NamesController@update');
Route::post('names/create', 'NamesController@create');
Route::get('names/delete/{id}', 'NamesController@delete');
Route::get('names/{id}', 'NamesController@show');
Route::get('posts', 'PostsController@create');
Route::get('index', 'UsersController@index');
Route::post('watch', 'UsersController@watch');

Route::get('sendform', 'UsersController@sendForm');
Route::get('getdata', 'UsersController@getdata');
Route::post('getdata', 'UsersController@getdata');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
