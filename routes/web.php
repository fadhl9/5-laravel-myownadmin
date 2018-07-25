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
    Route::resource('roles', 'AdminRolesController')->names(['index' => 'roles', 'create' => 'create_role', 'edit' => 'edit_role']);
    Route::resource('users', 'AdminUsersController')->names(['index' => 'users', 'create' => 'create_user', 'edit' => 'edit_user']);
    Route::resource('posts', 'AdminPostsController')->names(['index' => 'posts', 'create' => 'create_post', 'edit' => 'edit_post']);
    Route::resource('categories', 'AdminCategoriesController')->names(['index' => 'categories', 'create' => 'create_category', 'edit' => 'edit_category']);
});