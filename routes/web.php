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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard','DashboardController@index');

Route::get('/inventaris','InventarisController@index');
Route::post('/inventaris','InventarisController@store');
Route::get('/inventaris/{id_inventaris}/edit','InventarisController@edit');
Route::post('/inventaris/{id_inventaris}/update','InventarisController@update');
Route::get('/inventaris/{id_inventaris}/delete','InventarisController@delete');

Route::get('/petugas','PetugasController@index');
Route::post('/petugas','PetugasController@store');
Route::get('/petugas/{id_petugas}/edit','PetugasController@edit');
Route::post('/petugas/{id_petugas}/update','PetugasController@update');
Route::get('/petugas/{id_petugas}/delete','PetugasController@delete');

Route::get('/jenis','JenisController@index');
Route::post('/jenis','JenisController@store');
Route::get('/jenis/{id_jenis}/edit','JenisController@edit');
Route::post('/jenis/{id_jenis}/update','JenisController@update');
Route::get('/jenis/{id_jenis}/delete','JenisController@delete');

 
Auth::routes();
 Route::get('/logout','app/Http/Controllers/Auth/LoginController@logout');