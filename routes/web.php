    <?php

use Illuminate\Support\Facades\Auth;

    Route::resource('avatar','AvatarController');

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/navbar', function () {
        return view('navbar');
    });

    Route::get('/search', function () {
        return view('search');
    });

    Route::get('/showUserById/{id?}', 'UserController@showUserById');


    Route::get('/users', 'UserController@show');

    Route::resource('photos','PhotoController');

    Auth::routes(['verify' => true]);


    Route::get('/home', 'HomeController@index')->name('home');
