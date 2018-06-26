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

Route::get('blog', 'BlogController@index')->name('accueil');
Route::get('blog/single/{id}','BlogController@show')->name('blog.single');

Route::get('admin/index', 'PostController@index')->name('accueil.admin');
Route::get('admin/create/post', 'PostController@create')->name('post.create');

Route::post('admin/store/post', 'PostController@store')->name('post.store');