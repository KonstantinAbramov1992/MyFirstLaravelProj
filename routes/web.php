<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'StaticController@index');
Route::get('/about-us', 'StaticController@about');
Route::get('/blog', 'BlogController@index');
Route::post('/articles', 'BlogController@index');

Route::resource('articles', 'ArticlesController');
Route::resource('shop', 'ShopController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
