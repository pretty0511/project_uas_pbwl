<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pasien', [App\Http\Controllers\PasienController::class, 'index']);
Route::get('/pasien/create', [App\Http\Controllers\PasienController::class, 'create']);
Route::post('/pasien', [App\Http\Controllers\PasienController::class, 'store']);
Route::get('/pasien/edit/{id}', [App\Http\Controllers\PasienController::class, 'edit']);
Route::patch('/pasien/{id}', [App\Http\Controllers\PasienController::class, 'update']);
Route::delete('/pasien/{id}', [App\Http\Controllers\PasienController::class, 'destroy']);
// Tabel Obat
Route::get('/obat', [App\Http\Controllers\ObatController::class, 'index']);
Route::get('/obat/create', [App\Http\Controllers\ObatController::class, 'create']);
Route::post('/obat', [App\Http\Controllers\ObatController::class, 'store']);
Route::get('/obat/edit/{id}', [App\Http\Controllers\ObatController::class, 'edit']);
Route::patch('/obat/{id}', [App\Http\Controllers\ObatController::class, 'update']);
Route::delete('/obat/{id}', [App\Http\Controllers\ObatController::class, 'destroy']);
// End Tabel Obat
// Tabel Transaksi
Route::get('/transaksi', [App\Http\Controllers\TransaksiController::class, 'index']);
Route::get('/transaksi/create', [App\Http\Controllers\TransaksiController::class, 'create']);
Route::post('/transaksi', [App\Http\Controllers\TransaksiController::class, 'store']);
Route::get('/transaksi/edit/{id}', [App\Http\Controllers\TransaksiController::class, 'edit']);
Route::patch('/transaksi/{id}', [App\Http\Controllers\TransaksiController::class, 'update']);
Route::delete('/transaksi/{id}', [App\Http\Controllers\TransaksiController::class, 'destroy']);
// Tabel Obat Masuk
Route::get('/obatmasuk', [App\Http\Controllers\ObatmasukController::class, 'index']);
Route::get('/obatmasuk/create', [App\Http\Controllers\ObatmasukController::class, 'create']);
Route::post('/obatmasuk', [App\Http\Controllers\ObatmasukController::class, 'store']);
Route::get('/obatmasuk/edit/{id}', [App\Http\Controllers\ObatmasukController::class, 'edit']);
Route::patch('/obatmasuk/{id}', [App\Http\Controllers\ObatmasukController::class, 'update']);
Route::delete('/obatmasuk/{id}', [App\Http\Controllers\ObatmasukController::class, 'destroy']);