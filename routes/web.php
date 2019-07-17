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

/* Route::get('/', function () {
    return view('welcome');
});

/* Auth::routes();

/* Route::get('/home', 'HomeController@index')->name('home');

*/


Route::get('/', function () {
    return view('frontend.portal.index');
});

Auth::routes();

/* Route::get('/home', 'HomeController@index')->name('home'); */


Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/dashboard', 'DashboardController@index');
/*
Route::get('/user', 'UserController@index');
Route::get('/user-register', 'UserController@create');
Route::post('/user-register', 'UserController@store');
Route::get('/user-edit/{id}', 'UserController@edit');
*/
Route::resource('user', 'UserController');

Route::resource('kategoriartikels', 'kategoriartikelsController');
Route::resource('artikels', 'artikelsController');

Route::resource('kategoriberitas', 'kategoriberitasController');
Route::resource('beritas', 'beritasController');

Route::resource('kategorigaleries', 'kategorigaleriesController');
Route::resource('galeries', 'galeriesController');