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
Route::post('/contact_form', 'HomePageController@EmailContact');
Route::get('/blog', 'HomePageController@blog');
Route::get('/portfolio', 'HomePageController@portfolio');
Route::get('/solarsystem', 'HomePageController@solar');
Route::get('/service', 'HomePageController@services');
Route::get('/about', 'HomePageController@about');
Route::get('/service/shallow_drain', 'HomePageController@getShallow');
Route::get('/service/culverts', 'HomePageController@getCulverts');
Route::get('/service/louver_vents', 'HomePageController@getLouver');
Route::get('/service/concrete_floor_tiles', 'HomePageController@getConcrete');
Route::get('/service/star_concrete_tiles', 'HomePageController@getStar');
Route::get('/service/hatari_slabs', 'HomePageController@getHatari');
Route::get('/service/window_cills', 'HomePageController@getWindow');
Route::get('/service/paving_slabs', 'HomePageController@getPaving');
Route::get('/service/side_slabs', 'HomePageController@getSide');
Route::get('/service/ibd_drainages', 'HomePageController@getIbd');
Route::get('/service/ventilations', 'HomePageController@getVentilation');
Route::get('/service/hollow_blocks', 'HomePageController@getHollow');
Route::get('/service/solid_blocks', 'HomePageController@getSolid');
Route::get('/service/road_curbs', 'HomePageController@getRoadCurb');
Route::get('/service/timber', 'HomePageController@getTimber');
Route::get('/service/sand', 'HomePageController@getSand');
Route::get('/service/ballast', 'HomePageController@getBallast');
Route::get('/service/roofing_ridges', 'HomePageController@getRoofing');
Route::get('/service/flower_vents', 'HomePageController@getFlower');
Route::get('/service/column_coupings', 'HomePageController@getColumn');
Route::get('/service/kerra_boundary_posts', 'HomePageController@getKerra');
Route::get('/service/ceramic_floor_tiles', 'HomePageController@getCeramic');
Route::get('/service/terrazo_bench', 'HomePageController@getTerrazo');
Route::get('/service/cabro_blocks', 'HomePageController@getCabros');
Route::get('/service/paving_blocks', 'HomePageController@getPavingBlocks');
Route::get('/service/road_channels', 'HomePageController@getRoadChannels');
Route::get('/service/balustrades_balcony_posts', 'HomePageController@getBalu');
