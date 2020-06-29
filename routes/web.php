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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/categories', 'CategoryController@index');
Route::get('/categories/new', 'CategoryController@create');
Route::post('/categories/store', 'CategoryController@store');
Route::get('/categories/{category}', 'CategoryController@show');
Route::get('/categories/{category}/edit', 'CategoryController@edit');
Route::post('/categories/{category}/update', 'CategoryController@update');
Route::get('/categories/{category}/delete', 'CategoryController@destroy');
