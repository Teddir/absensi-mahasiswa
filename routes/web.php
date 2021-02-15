<?php

use App\Http\Controllers\MhsController;
use App\Http\Controllers\MtkController;
use App\Http\Controllers\AbsController;
use Illuminate\Support\Facades\Route;


// Route::resource('mahasiswas', MhsController::class);
// Route::resource('matakuliahs', MtkController::class);
// Route::resource('absensis', AbsController::class);
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
// Route::put('/mahasiswas/{id}', [MhsController::class, 'update']);
// Route::delete('/mahasiswas/{id}', [MhsController::class, 'destroy']);

// Route::get('/', 'AbsController@index');
// Route::get('/absensi.create', 'AbsController@create');
// Route::Post('/absensis.store', 'AbsController@create');
// Route::post('/absensis.create', [AbsController::class, 'show']);


// Route::get('/matakuliahs', [MhsController::class, 'index']);
// Route::get('/matakuliahs', [MtkController::class, 'show']);
// Route::get('/matakuliahs.update', [MtkController::class, 'update']);
// Route::get('', [MtkController::class, 'index']);
// Route::delete('', [MhsController::class, 'destroy']);


Route::get('/', 'MhsController@index');
Route::get('/mahasiswas', 'MhsController@index');
Route::get('/mahasiswas.create', 'MhsController@create');
Route::get('/mahasiswas.show/{id}', 'MhsController@show');
Route::Post('/mahasiswas.store', 'MhsController@store');
Route::get('/mahasiswas.edit/{id}', 'MhsController@edit');
Route::put('/mahasiswas.update/{id}', 'MhsController@update');
Route::delete('/mahasiswas.destroy/{id}', 'MhsController@destroy');

Route::get('/matakuliahs', 'MtkController@index');
Route::get('/matakuliahs.create', 'MtkController@create');
Route::get('/matakuliahs.show/{id}', 'MtkController@show');
Route::Post('/matakuliahs.store', 'MtkController@store');
Route::get('/matakuliahs.edit/{id}', 'MtkController@edit');
Route::put('/matakuliahs.update/{id}', 'MtkController@update');
Route::delete('/matakuliahs.destroy/{id}', 'MtkController@destroy');


Route::get('/absensis', 'AbsController@index');
Route::get('/absensis.create', 'AbsController@create');
Route::get('/absensis.show/{id}', 'AbsController@show');
Route::Post('/absensis.store', 'AbsController@store');
Route::get('/absensis.edit/{id}', 'AbsController@edit');
Route::put('/absensis.update/{id}', 'AbsController@update');
Route::delete('/absensis.destroy/{id}', 'AbsController@destroy');