<?php

use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PemasukanPengeluaranController;
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
    return view('dashboard');
});

Route::get('/pemasukan-pengeluaran', [PemasukanPengeluaranController::class, 'index']);
Route::get('/index-pengeluaran', [PemasukanPengeluaranController::class, 'index2']);
Route::get('/pemasukan-pengeluaran/create', [PemasukanPengeluaranController::class, 'create']);
Route::post('/pemasukan-pengeluaran/store', [PemasukanPengeluaranController::class, 'store']);
Route::get('/pemasukan-pengeluaran/pemasukan/{id}', [PemasukanPengeluaranController::class, 'pemasukan']);
Route::get('/pemasukan-pengeluaran/pengeluaran/{id}', [PemasukanPengeluaranController::class, 'pengeluaran']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'autentikasi']);

Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/semua', [LaporanController::class, 'semua']);
Route::get('/kolekte', [LaporanController::class, 'kolekte']);
Route::get('/sumbangan', [LaporanController::class, 'sumbangan']);
Route::get('/pengeluaran', [LaporanController::class, 'pengeluaran']);
Route::get('/kas', [LaporanController::class, 'kas']);
