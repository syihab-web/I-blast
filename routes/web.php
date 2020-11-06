<?php
use App\Artikel;
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
    $artikel    = Artikel::orderBy('updated_at','desc')->paginate(3);
    return view('welcome', compact('artikel'));

});

Route::get('/email/seeTemplate', function () {
    return view('seeTemplate');
});

// Route Artikel
Route::get('/lihatArtikel', 'ArtikelController@index');
Route::get('/buatArtikel', 'ArtikelController@buat');
Route::post('/proses_buatArtikel', 'ArtikelController@proses_buat');
Route::get('/detailArtikel/{slug}', 'ArtikelController@detail');
Route::get('/editArtikel/{id}', 'ArtikelController@edit');
Route::put('/proses_buatArtikel/{id}', 'ArtikelController@proses_edit');
Route::get('/hapusArtikel/{id}', 'ArtikelController@hapus' );
Route::get('/lihatSampah', 'ArtikelController@lihat_sampah');
Route::get('/pulihkanSampah/{id}', 'ArtikelController@pulih_sampah' );
Route::delete('/hapusSampah/{id}', 'ArtikelController@hapus_sampah' );
// End Route Artikel

Route::resource('/pengumuman', 'PengumumanController');

Route::post('/pengumuman/store', 'PengumumanController@store');

Auth::routes(['verify' => true]);

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
Route::get('/searchUsers', 'UsersController@search');
Route::resource('/email', 'EmailController');
Route::resource('/saran', 'SaranController');
Route::get('/email/{value}', 'EmailController@show');
Route::post('/email/sendEmail', 'EmailController@sendMail');
Route::post('/email/sendAgain', 'EmailController@sendAgain');
Route::get('/saran', 'SaranController@index');
Route::post('/sendSaran', 'SaranController@store');
Route::get('auth/{provider}', 'GoogleController@redirect');
Route::get('auth/{provider}/callback', 'GoogleController@callback');
Route::get('/getTemplate1', 'TemplateController@getTemplate1');
Route::get('/getTemplate2', 'TemplateController@getTemplate2');
