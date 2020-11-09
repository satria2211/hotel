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

Route::get('/', 'App\Http\Controllers\ControllerPages@dashboard');
Route::view('user','webb/index');
// Kamar
Route::get('/kamar', 'App\Http\Controllers\ControllerRoom@index');
Route::get('/kamar/create', 'App\Http\Controllers\ControllerRoom@create');
Route::post('/kamar', 'App\Http\Controllers\ControllerRoom@store');
Route::get('/kamar/hapus{id_kamar}', 'App\Http\Controllers\ControllerRoom@hapus');
Route::get('/kamar/ubah/{id_kamar}', 'App\Http\Controllers\ControllerRoom@edit');
Route::post('/kamar/update', 'App\Http\Controllers\ControllerRoom@update');
Route::delete('/kamar/{id_kamar}', 'App\Http\Controllers\ControllerRoom@destroy');
// End-Kamar

// Tamu
Route::get('/tamu', 'App\Http\Controllers\ControllerTamu@index');
Route::get('/tamu/create', 'App\Http\Controllers\ControllerTamu@create');
Route::get('/tamu/{tamu}', 'App\Http\Controllers\ControllerTamu@show');
// End-Tamu

// Pemesanan
Route::get('/pemesanan', 'App\Http\Controllers\ControllerPemesanan@index');
// Route::view('pemesanan','admin/pemesanan/pemesanan');

// End-Pemesanan

// Fasilitas
Route::view('fasilitas','admin/fasilitas/fasilitas');

// End-Fasilitas

// Check-in
Route::get('/checkin', 'App\Http\Controllers\ControllerCheckin@index');
// Route::view('checkin','admin/checkin/checkin');

// End-Check-in

// Check-Out
Route::get('/checkout', 'App\Http\Controllers\ControllerCheckout@index');
// Route::view('checkout','admin/checkout/checkout');

// End-Check-out

// History
Route::get('/history', 'App\Http\Controllers\ControllerHistory@index');
// Route::view('history','admin/history/history');

// End-History
