<?php

use App\http\controllers\MhsController;
use App\http\controllers\MtkController;
use App\http\controllers\AbsController;
use Illuminate\Support\Facades\Route;


Route::resource('mahasiswas', MhsController::class);
Route::resource('matakuliahs', MtkController::class);
Route::resource('absensis', AbsController::class);
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can regddleware group. Now create something great!
|ister web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" mi
*/
//Route::put('/mahasiswas/{id}', [MhsController::class, 'update']);
//Route::delete('/mahasiswas/{id}', [MhsController::class, 'destroy']);


Route::get('', [MhsController::class, 'index']);
Route::get('', [MtkController::class, 'index']);
Route::get('', [AbsController::class, 'index']);
Route::delete('/mahasiswas/{id}', [MhsController::class, 'destroy']);
Route::delete('', [MhsController::class, 'destroy']);