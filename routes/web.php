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

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/post/{post_id}', 'HomeController@post');

Route::get('/dashboard', 'DashboardController@index');
Route::get('/dashboard/posts', 'DashboardController@posts');
Route::get('/dashboard/users', 'DashboardController@users');

Route::match(['get', 'post'], '/dashboard/post/create', 'PostController@create');
Route::match(['get', 'put'], '/dashboard/post/edit/{post_id}', 'PostController@edit');

Route::get('/dashboard/post/delete/{post_id}', 'PostController@delete');
