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

Route::get('/', 'WelcomeController@index');
Route::get('/blog/posts/{post}', 'Blog\PostController@show')->name('blog.show');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/categories', 'CategoryController');
    Route::resource('/tags', 'TagController');
    // Posts
    Route::resource('/posts', 'PostController')->middleware('auth');
    Route::get('/trashed-posts', 'PostController@trash')->name('trashed-posts.index');
    Route::put('/restore-post', 'PostController@restore')->name('restore-posts');
    // Users
    Route::get('/users/profile', 'UserController@edit')->name('users.edit-profile');
    Route::put('/users/profile', 'UserController@update')->name('users.update-profile');
});

Route::middleware(['auth', 'admin'])->group(function () {
    // Users
    Route::get('/users', 'UserController@index')->name('users.index');
    Route::post('/users/{user}/make-admin', 'UserController@makeAdmin')->name('users.make-admin');
});
