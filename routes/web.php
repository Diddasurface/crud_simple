<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DescripcionController;
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
Route::get('/vistas/crear',[DescripcionController::class,'crear'])->name('vistas.crear');
Route::POST('/vistas/store',[DescripcionController::class,'store'])->name('vistas.store');
Route::get('/vistas/leer',[DescripcionController::class,'leer'])->name('vistas.leer');
Route::put('/vistas/{produc}',[DescripcionController::class,'update'])->name('vistas.update');


Route::get('/vistas/eliminar',[DescripcionController::class,'eliminar'])->name('vistas.eliminar');
Route::POST('/vistas/destruir',[DescripcionController::class,'destruir'])->name('vistas.destruir');