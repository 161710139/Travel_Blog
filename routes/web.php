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
Route::get('coba','ArtikelMemberController@index')->name('coba');
Route::get('/', 'TampilanController@index')->name('awal');
Route::get('destinasi','TampilanController@destinasi')->name('destinasi');
Route::get('/show/{id}', 'TampilanController@show')->name('show');
Route::get('/search', 'TampilanController@search')->name('search');
Route::group(['prefix'=>'/show/{id}/komentar', 'middleware'=>['auth','role:member|super_admin']], function(){
Route::post('/','KomentarController@store')->name('show.komentar.store');
});
Route::get('/destinasi/{id}', 'TampilanController@daftar')->name('destinasi.daftarartikel');

Auth::routes();

Route::group(['prefix'=>'superadmin', 'middleware'=>['auth','role:super_admin']], function(){
Route::get('/', 'HomeController@index')->name('home');
Route::resource('member','MemberController');
Route::resource('destinasis','DestinasiController');
Route::post('destinasis/{$destinasi->id}', 'DestinasiController@destroy')->name('destinasi.destroy');
Route::resource('komentars','KomentarController');
Route::resource('galeri','GaleriController');
Route::resource('daftarmember','MemberController');
Route::post('/artikel/{publish}', 'ArtikelController@Publish')->name('artikel.publish');
Route::get('/artikel/{id}', 'GaleriController@create')->name('creategaleri');
Route::resource('artikels','ArtikelController');
});

Route::group(['prefix'=>'member', 'middleware'=>['auth','role:member|super_admin']], function(){
	//Route::get('/','HomeController@index')->name('home');
	Route::get('/', 'HomeController@index')->name('home');
	Route::resource('artikels','ArtikelController');
	Route::get('/artikel/{id}', 'GaleriController@create')->name('creategaleri');
	Route::post('/artikel/{id}/create', 'GaleriController@store')->name('creategaleri.store');
	Route::resource('galeri','GaleriController');
});	

Route::group(['prefix'=>'superadmin', 'middleware'=>['auth','role:super_admin']], function(){
	Route::resource('member','MemberController');
});
