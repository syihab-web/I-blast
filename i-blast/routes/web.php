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

Route::group(['middleware' => 'auth'], function () {

    Route::get('profile', 'ProfileController@edit')->name('profile.edit');

    Route::patch('profile', 'ProfileController@update')->name('profile.update');

    Route::get('password', 'PasswordController@edit')->name('user.password.edit');

    Route::patch('password', 'PasswordController@update')->name('user.password.update');
});

Route::resource('/email', 'EmailController');
Route::get('/email/{value}', 'EmailController@show');
Route::post('/email/sendMail', 'EmailController@sendMail');
Route::get('auth/{provider}', 'GoogleController@redirect');
Route::get('auth/{provider}/callback', 'GoogleController@callback');
