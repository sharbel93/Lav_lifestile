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
Route::get('/home', 'DashboardController@index')->name('home');

// Homepage (landing page)
Route::get('/', 'HomePageController@index');
Route::get('/contact', 'HomePageController@contact');
Route::get('/blog', 'HomePageController@blog');
Route::get('/portfolio', 'HomePageController@portfolio');
Route::get('/service', 'HomePageController@services');
Route::get('/about', 'HomePageController@about');