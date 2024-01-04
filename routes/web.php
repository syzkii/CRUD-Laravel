<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;

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

Route::get('/pegawai',[KaryawanController::class, 'index'])->name('pegawai');

Route::get('/tambahpegawai',[KaryawanController::class, 'tambahpegawai'])->name('tambahpegawai');

Route::post('/insertdata',[KaryawanController::class, 'insertdata'])->name('insertdata');

Route::post('/tampilkandata/{id}',[KaryawanController::class, 'tampilkandata'])->name('tampilkandata');
