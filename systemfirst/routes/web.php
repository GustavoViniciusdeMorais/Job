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

/* Autentication */
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/* Pages */
Route::get('/', 'PagesController@index');

/* Products */
Route::resource('products', 'ProductController');
Route::get('products/{id}/delete', ['as' => 'products.delete', 'uses' => 'ProductController@delete']);

/* Post */
Route::resource('posts', 'PostController');
Route::get('posts/{id}/delete', ['as' => 'posts.delete', 'uses' => 'PostController@delete']);

/* Products */
Route::resource('panel', 'PanelController');

/* Queue Simulation */
Route::resource('queue', 'QueueController');
Route::resource('offer', 'OfferController');
