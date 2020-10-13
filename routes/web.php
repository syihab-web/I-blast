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

Route::get('/email/seeTemplate', function () {
    return view('seeTemplate');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {

    Route::get('profile', 'ProfileController@edit')->name('profile.edit');

    Route::patch('profile', 'ProfileController@update')->name('profile.update');

    Route::get('password', 'PasswordController@edit')->name('user.password.edit');

    Route::patch('password', 'PasswordController@update')->name('user.password.update');
});

Route::resource('/manageUsers', 'UsersController');
Route::post('manageUsers/store', 'UsersController@store');
Route::get('/email/dashboard', 'EmailController@dashboard');
Route::get('/search', 'EmailController@search');
Route::resource('/email', 'EmailController');
Route::resource('/saran', 'SaranController');
Route::get('/email/{value}', 'EmailController@show');
Route::post('/email/sendMail', 'EmailController@sendMail');
Route::post('/email/sendAgain', 'EmailController@sendAgain');
Route::get('/saran', 'SaranController@index');
Route::post('/sendSaran', 'SaranController@store');
Route::get('auth/{provider}', 'GoogleController@redirect');
Route::get('auth/{provider}/callback', 'GoogleController@callback');
