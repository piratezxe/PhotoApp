<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/navbar', function () {
    return view('navbar');
});

Route::get('/search', function () {
    return view('search');
});

Route::get('profil/{id}', 'UserController@profil');

Route::get('profil/', 'UserController@yourprofil');

Route::post('profil/photo', 'GalleryController@store');

Route::get('user/{id}', 'UserController@filter');

Route::get('userOnline', 'UserController@show');

Route::get('user', 'UserController@show');

Route::resource('photo', 'GalleryController');

Auth::routes(['verify' => true]);


Route::get('/home', 'HomeController@index')->name('home');
