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


Route::group(['prefix' => 'admin'], function () {
    Route::get('dashboard', 'AdminController@index')->name('dashboard');
    Route::resource('roles', 'AdminRolesController')->names(['index' => 'roles']);
    Route::resource('users', 'AdminUsersController')->names(['index' => 'users']);
    Route::resource('posts', 'AdminPostsController')->names(['index' => 'posts']);
    Route::resource('categories', 'AdminCategoriesController')->names(['index' => 'categories']);
});