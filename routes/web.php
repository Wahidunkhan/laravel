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

Auth::routes();

Route::get('ajax_regen_captcha', function(){
    return captcha_src();



});
//crud kategori artikel
Route::get('/kategori_artikel','kategori_artikel_controller@index')->name('kategori_artikel.index');
Route::get('/kategori_artikel/create', 'Kategori_artikel_controller@create')->name('kategori_artikel.create');
Route::post('/kategori_artikel', 'kategori_artikel_controller@store')->name('kategori_artikel.store');
Route::get('/kategori_artikel/{id}', 'kategori_artikel_controller@show')->name('kategori_artikel.show');
Route::get('/kategori_artikel/{id}/edit', 'kategori_artikel_controller@edit')->name('kategori_artikel.edit');
Route::patch('/kategori_artikel/{id}', 'kategori_artikel_controller@update')->name('kategori_artikel.update');
Route::delete('/kategori_artikel/{id}','kategori_artikel_controller@destroy')->name('kategori_artikel.destroy');

//crud kategori berita
Route::get('/kategori_berita','kategori_berita_controller@index')->name('kategori_berita.index');
Route::get('/kategori_berita/create','kategori_berita_controller@create')->name('kategori_berita.create');
Route::post('/kategori_berita','kategori_berita_controller@store')->name('kategori_berita.store');
Route::get('/kategori_berita/{id}','kategori_berita_controller@show')->name('kategori_berita.show');
Route::get('/kategori_berita/{id}/edit', 'Kategori_berita_controller@edit')->name('kategori_berita.edit');
Route::patch('/kategori_berita/{id}', 'Kategori_berita_controller@update')->name('kategori_berita.update');
Route::delete('/kategori_berita/{id}','kategori_berita_controller@destroy')->name('kategori_berita.destroy');


//curd kategori galeri
Route::get('/kategori_galeri','kategori_galeri_controller@index')->name('kategori_galeri.index');
Route::get('/kategori_galeri/create','kategori_galeri_controller@create')->name('kategori_galeri.create');
Route::post('/kategori_galeri','kategori_galeri_controller@store')->name('kategori_galeri.store');
Route::get('/kategori_galeri/{id}','kategori_galeri_controller@show')->name('kategori_galeri.show');
Route::get('/kategori_galeri/{id}/edit', 'kategori_galeri_controller@edit')->name('kategori_galeri.edit');
Route::patch('/kategori_galeri/{id}', 'kategori_galeri_controller@update')->name('kategori_galeri.update');
Route::delete('/kategori_galeri/{id}','kategori_galeri_controller@destroy')->name('kategori_galeri.destroy');


//crud kategori pengumuman
Route::get('/kategori_pengumuman','kategori_pengumuman_controller@index')->name('kategori_pengumuman.index');
Route::get('/kategori_pengumuman/create','kategori_pengumuman_controller@create')->name('kategori_pengumuman.create');
Route::post('/kategori_pengumuman','kategori_pengumuman_controller@store')->name('kategori_pengumuman.store');
Route::get('/kategori_pengumuman/{id}','kategori_pengumuman_controller@show')->name('kategori_pengumuman.show');
Route::get('/kategori_pengumuman/{id}/edit', 'kategori_pengumuman_controller@edit')->name('kategori_pengumuman.edit');
Route::patch('/kategori_pengumuman/{id}', 'kategori_pengumuman_controller@update')->name('kategori_pengumuman.update');

Route::resource('artikel','artikel_controller');
//crud artikel
//Route::get('/artikel','artikel_controller@index')->name('artikel.index');
//Route::get('/artikel/create','artikel_controller@create')->name('artikel.create');
//Route::post('/artikel','artikel_controller@store')->name('artikel.store');
//Route::get('/artikel/{id}','artikel_controller@show')->name('artikel.show');
//Route::get('/artikel/{id}/edit', 'artikel_controller@edit')->name('artikel.edit');
//Route::patch('/artikel/{id}', 'artikel_controller@update')->name('artikel.update');
//Route::delete('/artikel/{id}','artikel_controller@destroy')->name('artikel.destroy');

//crud berita
Route::get('/berita','berita_controller@index')->name('berita.index');
Route::get('/berita/create','berita_controller@create')->name('berita.create');
Route::post('/berita','berita_controller@store')->name('berita.store');
Route::get('/berita/{id}','berita_controller@show')->name('berita.show');
Route::get('/berita/{id}/edit', 'berita_controller@edit')->name('berita.edit');
Route::patch('/berita/{id}', 'berita_controller@update')->name('berita.update');
Route::delete('/berita/{id}','berita_controller@destroy')->name('berita.destroy');

//crud galeri
Route::get('/galeri','galeri_controller@index')->name('galeri.index');
Route::get('/galeri/create','galeri_controller@create')->name('galeri.create');
Route::post('/galeri','galeri_controller@store')->name('galeri.store');
Route::post('/galeri/{id}','galeri_controller@show')->name('galeri.show');
Route::get('/galeri/{id}/edit', 'galeri_controller@edit')->name('galeri.edit');
Route::patch('/galeri/{id}', 'galeri_controller@update')->name('galeri.update');
Route::delete('/galeri/{id}','galeri_controller@destroy')->name('galeri.destroy');

//crud pengumuman
Route::get('/pengumuman','pengumuman_controller@index')->name('pengumuman.index');
Route::get('/pengumuman/create','pengumuman_controller@create')->name('pengumuman.create');
Route::post('/pengumuman','pengumuman_controller@store')->name('pengumuman.store');
Route::get('/pengumuman/{id}','pengumuman_controller@show')->name('pengumuman.show');








