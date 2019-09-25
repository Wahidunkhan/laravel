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

Route::get('/kategori_artikel','kategori_artikel_controller@index')->name('kategori_artikel.index');
Route::get('/kategori_berita','kategori_berita_controller@index')->name('kategori_berita.index');
Route::get('/kategori_galeri','kategori_galeri_controller@index')->name('kategori_galeri.index');
Route::get('/kategori_pengumuman','kategori_pengumuman_controller@index')->name('kategori_pengumuman.index');
Route::get('/artikel','artikel_controller@index')->name('artikel.index');
Route::get('/berita','berita_controller@index')->name('berita.index');
Route::get('/galeri','galeri_controller@index')->name('galeri.index');
Route::get('/pengumuman','pengumuman_controller@index')->name('pengumuman.index');








