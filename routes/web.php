<?php

use App\Http\Controllers\karyaController;
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

Route::get('/karya', [karyaController::class, 'index']);
Route::get('/karya/tambah', [karyaController::class, 'create']);
Route::post('/karya/store', [karyaController::class, 'store']);
Route::get('/karya/edit/{id}', [karyaController::class, 'edit']);
Route::put('/karya/update/{id}', [karyaController::class, 'update']);
Route::get('/karya/hapus/{id}', [karyaController::class, 'delete']);
Route::get('/karya/destroy/{id}', [karyaController::class, 'destroy']);
Route::get('/karya/cetak', [karyaController::class, 'cetak']);
