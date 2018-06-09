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

Route::group(['prefix'=>'superadmin', 'middleware'=>['auth','role:super_admin']], function(){
Route::get('/', 'HomeController@index')->name('home');
Route::resource('member','MemberController');
Route::resource('destinasis','DestinasiController');
Route::resource('komentars','KomentarController');
Route::resource('galeri','GaleriController');
Route::resource('artikels','ArtikelController');
});

Route::group(['prefix'=>'member', 'middleware'=>['auth','role:super_admin|member']], function(){
	Route::resource('artikelmember','ArtikelMemberController');
	Route::get('editartikel','ArtikelMemberController@edit');
	Route::resource('galerimember','GaleriMemberController');
});	

Route::group(['prefix'=>'superadmin', 'middleware'=>['auth','role:super_admin']], function(){
	Route::resource('member','MemberController');
});
