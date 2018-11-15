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
    return view('Auth.login');
});

//pendaftaran
Route::resource('/siswa','siswa_controller');

Route::get('/tambah','siswa_controller@create');

Route::post('/store','siswa_controller@create')->name('store');

Route::get('/hapus/{id}','siswa_controller@destroy')->name('hapus');

Route::post('/upd','siswa_controller@update');

Route::get('/edit/{id}','siswa_controller@edit');



//perpustakaan

Route::resource('/buku','buku_controller');

Route::get('/add','buku_controller@create');

Route::post('/store','buku_controller@create')->name('store');

Route::get('/destroy/{id}','buku_controller@destroy')->name('destroy');

Route::post('/update','buku_controller@update');

Route::get('/up/{id}','buku_controller@edit');


//baru

Route::get('/tampilan', function () {
    return view('tampilan.child');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//biodata
Route::resource('/biyo','biyo_controller');

Route::get('/tambih','biyo_controller@create');

Route::post('/store','biyo_controller@create')->name('store');

Route::get('/hps/{id}','biyo_controller@destroy')->name('hps');

Route::post('/baru','biyo_controller@update');

Route::get('/new/{id}','biyo_controller@edit');