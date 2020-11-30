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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/home', 'App\Http\Controllers\AwalController@home');

//LOGIN-LOGOUT
Route::get('/login', 'App\Http\Controllers\AwalController@login');

//coba"
Route::get('/authenticate','App\Http\Controllers\AwalController@authentication');

//ini yg benar di bawah
Route::post('/authenticate','App\Http\Controllers\AwalController@authentication');
Route::get('/logout', 'App\Http\Controllers\AwalController@logout');

//REGISTRATION
Route::post('/register', 'App\Http\Controllers\AwalController@daftar_baru');
Route::get('/register', 'App\Http\Controllers\AwalController@registration');

//COBA"

// KATALOG RESEP dan BAHAN
Route::get('/katalogresep', 'App\Http\Controllers\KatalogController@katalog_resep');
Route::get('/katalogbahan', 'App\Http\Controllers\KatalogController@katalog_bahan');

// SEARCH
Route::get('/searchsemua', 'App\Http\Controllers\KatalogController@search_semua');
Route::get('/searchbahan', 'App\Http\Controllers\KatalogController@search_bahan');
Route::get('/searchresep', 'App\Http\Controllers\KatalogController@search_resep');