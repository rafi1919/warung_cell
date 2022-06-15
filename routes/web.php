<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\KasirController;
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
Route::get('/edit/{id}', [RegisterController::class, 'editadmin']);

Route::get('/home', [HomeController::class, 'index']);

Route::get('/stok', [StokController::class, 'index']);

Route::get('/input', [InputController::class, 'index']);

Route::get('/output', [OutputController::class, 'index']);

Route::get('/kasir', [KasirController::class, 'index']);

Route::get('/laporan', [LaporanController::class, 'index']);


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
