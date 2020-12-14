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
// HOME
Route::get('/home', 'App\Http\Controllers\AwalController@home');
Route::get('/home', 'App\Http\Controllers\ResepController@resep_pilihan');
Route::get('/', 'App\Http\Controllers\AwalController@home');
Route::get('/', 'App\Http\Controllers\ResepController@resep_pilihan');


//LOGIN-LOGOUT
Route::get('/login', 'App\Http\Controllers\AwalController@login');

//coba"
// Route::get('/authenticate','App\Http\Controllers\AwalController@authentication');


// coba blade
Route::get('/', function () {
    return view('home');
});

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
Route::get('/searchbahan', 'App\Http\Controllers\KatalogController@search_bahan');
Route::get('/searchresep', 'App\Http\Controllers\KatalogController@search_resep');

// AKUN
Route::get('/akun', 'App\Http\Controllers\AwalController@akun');
Route::post('/updateakun', 'App\Http\Controllers\AwalController@update_akun');

// GANTI KATA SANDI
Route::get('/gantikatasandi', 'App\Http\Controllers\AwalController@ganti_sandi');
Route::post('/gantikatasandi', 'App\Http\Controllers\AwalController@update_password');

Route::get('/lupakatasandi', 'App\Http\Controllers\AwalController@lupa_sandi');

// DESKRIPSI RESEP
Route::get('/resep/{id}', 'App\Http\Controllers\ResepController@detail_resep');

// ALAMAT
Route::get('/aturalamat', 'App\Http\Controllers\AwalController@atur_alamat');
Route::post('/aturalamat', 'App\Http\Controllers\AwalController@update_alamat');

// BUAT ALAMAT BARU
Route::get('/alamatbaru', 'App\Http\Controllers\AwalController@alamat_baru');
Route::post('/tambahalamat', 'App\Http\Controllers\AwalController@tambah_alamat');

// FAQ, SK, INFO PEMBAYARAN, INFO PENGIRIMAN
Route::get('/hubungikami', 'App\Http\Controllers\FiturController@hubungi_kami');
Route::post('/hubungikami/send', 'App\Http\Controllers\FiturController@send_email');

Route::get('/faq', 'App\Http\Controllers\FiturController@faq');
Route::get('/sdank', 'App\Http\Controllers\FiturController@sdank');
Route::get('/infopembayaran', 'App\Http\Controllers\FiturController@info_pembayaran');
Route::get('/infopengiriman', 'App\Http\Controllers\FiturController@info_pengiriman');

// CART
Route::post('/addtocart', 'App\Http\Controllers\CartController@add_cart');
Route::get('/cart', 'App\Http\Controllers\CartController@tampil_cart');
Route::get('/pluscart', 'App\Http\Controllers\CartController@plus_cart');

// CHECKOUT
Route::get('/checkout', 'App\Http\Controllers\CheckoutController@tampil_checkout');

// RIWAYAT TRANSAKSI
Route::get('/riwayattransaksi', 'App\Http\Controllers\CheckoutController@riwayat_transaksi');


// DETAIL PESANAN
Route::get('/detailpesanan/{id}', 'App\Http\Controllers\CheckoutController@detail_pesanan');

// PEMBAYARAN
Route::get('/pembayaran', 'App\Http\Controllers\CheckoutController@tampil_pembayaran');
