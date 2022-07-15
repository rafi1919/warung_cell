<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OutputController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\RegisterController;

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
//     return view('index');
// });

Route::get('/', [LoginController::class, 'index']);
Route::post('/', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'tambahadmin']);

Route::get('/editadmin/{id}', [RegisterController::class, 'editadmin'])->name('editadmin');
Route::post('/updatedata/{id}', [RegisterController::class, 'updatedata'])->name('updatedata');

Route::get('/deletedata/{id}', [RegisterController::class, 'deletedata'])->name('deletedata');

Route::get('/home', [HomeController::class, 'index']);

Route::get('/barang', [BarangController::class, 'index']);
Route::post('/barang/store', [BarangController::class, 'store']);
Route::post('/barang/{id}/update', [BarangController::class, 'update']);
Route::get('/barang/{id}/destroy', [BarangController::class, 'destroy']);

Route::get('/input', [InputController::class, 'index']);
Route::get('/input/ajax', [InputController::class, 'ajax']);
Route::get('/input/create', [InputController::class, 'create']);
Route::post('/input/store', [InputController::class, 'store']);

Route::get('/output', [OutputController::class, 'index']);
Route::get('/output/ajax', [OutputController::class, 'ajax']);
Route::get('/output/create', [OutputController::class, 'create']);
Route::post('/output/store', [OutputController::class, 'store']);;

Route::get('/kategori', [KategoriController::class, 'index']);
Route::post('/kategori/store', [KategoriController::class, 'store']);
Route::post('/kategori/{id}/update', [KategoriController::class, 'update']);
Route::get('/kategori/{id}/destroy', [KategoriController::class, 'destroy']);

Route::get('/kasir', [KasirController::class, 'index']);

Route::get('/lap_brg_msk', [LaporanController::class, 'lap_brg_msk']);
Route::get('/lap_brg_msk/cetak_brg_msk', [LaporanController::class, 'cetak_brg_msk']);

Route::get('/lap_brg_klr', [LaporanController::class, 'lap_brg_klr']);
Route::get('/lap_brg_klr/cetak_brg_klr', [LaporanController::class, 'cetak_brg_klr']);

Route::get('/lap_user', [LaporanController::class, 'lap_user']);
Route::get('/lap_user/cetak_user', [LaporanController::class, 'cetak_user']);

Route::get('/lap_barang', [LaporanController::class, 'lap_barang']);
Route::get('/lap_barang/cetak_barang', [LaporanController::class, 'cetak_barang']);

Route::get('/lap_kategori', [LaporanController::class, 'lap_kategori']);
Route::get('/lap_kategori/cetak_kategori', [LaporanController::class, 'cetak_kategori']);


// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/stok', function () {
//     return view('stok');
// });

// Route::get('/input', function () {
//     return view('input');
// });

// Route::get('/output', function () {
//     return view('output');
// });

// Route::get('/kasir', function () {
//     return view('kasir');
// });
