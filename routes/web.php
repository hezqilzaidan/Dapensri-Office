<?php

use Illuminate\Support\Facades\Route;

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
    return view('login');
});

Route::get('/privacypolicy', function () {
    return view('privacypolicy');
});

$router->group(['middleware' => 'guest'], function () use ($router) {
    Route::get('/register', 'LoginController@viewRegister');
    Route::post('register/post', 'LoginController@Register');
    Route::post('login/post', 'LoginController@postLogin');
    Route::get('/login', 'LoginController@viewLogin')->name('login');
});

$router->group(['middleware' => 'auth'], function () use ($router) {

    Route::get('/logout', 'LoginController@logout');

    Route::resource('List_Ex', 'DataExController');
    Route::get('getData', 'DataExController@getData');
    Route::get('list_ex/getItem/{id}', 'DataExController@getItem');
    Route::delete('deleteData', 'DataExController@deleteData');
    Route::get('export_excel', 'DataExController@export_excel');


    Route::get('keluarga', 'keluargaController@index');
    Route::get('keluarga/getData', 'keluargaController@getData');
    Route::get('keluarga/getItem/{id}', 'keluargaController@getItem');
    Route::post('/keluarga/update', 'keluargaController@update');
    Route::get('/keluarga/delete/{id}', 'keluargaController@destroy');

    Route::get('verifikasi', 'verifikasiController@index');
    Route::get('verifikasi/getData', 'verifikasiController@getData');
    Route::get('verifikasi/getItem/{id}', 'verifikasiController@getItem');
    Route::post('/verifikasi/update', 'verifikasiController@update');
    Route::get('/verifikasi/delete/{id}', 'verifikasiController@destroy');

    Route::get('lapKeu', 'LapKeuanganController@index');
    Route::get('lapKeu/getData', 'LapKeuanganController@getData');
    Route::post('lapKeu/uploadData', 'LapKeuanganController@uploadData');
    Route::get('/lapKeu/delete/{id}', 'LapKeuanganController@hapus');
    Route::get('lapKeu/getItem/{id}', 'LapKeuanganController@getItem');

    Route::get('spt', 'SptController@index');
    Route::get('spt/getData', 'SptController@getData');
    Route::get('spt/getItem/{id}', 'SptController@getItem');
    Route::post('/spt/import', 'SptController@import');
    Route::post('/spt/store', 'SptController@store');
    Route::delete('/spt/delete/{id}', 'SptController@destroy');

    Route::get('userMob', 'UserMobileController@index');
    Route::post('/userMob/register', 'UserMobileController@register');
    Route::get('/userMob/delete/{id}', 'UserMobileController@destroy');
    Route::get('userMob/getData', 'UserMobileController@getData');
    Route::get('userMob/getItem/{id}', 'UserMobileController@getItem');
});

// Route::get('/datadiri', function () {
//     return view('datadiri');
// });

Route::get('/datapernikahan', function () {
    return view('datapernikahan');
});

Route::get('datadiri', 'DatadiriController@index');
Route::post('/datadiri/store', 'DatadiriController@store');
Route::post('list_ex', 'DatadiriController@datadiri');


Route::get('datakeluarga', 'DatakeluargaController@index');
Route::post('/datakeluarga/store', 'DatakeluargaController@store');
Route::post('keluarga', 'DatakeluargaController@datakeluarga');
// Route::get('/datakeluarga', function () {
//     return view('datakeluarga');
// });

Route::get('verifikasi2', 'DataverifController@upload');
Route::post('/verifikasi2/proses', 'DataverifController@proses_upload');










Route::get('home', 'HomeController@index');



// Route::get('/verifikasi2', function () {
//     return view('verifikasi2');
// });