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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/nosotros', [App\Http\Controllers\HomeController::class, 'nosotros'])->name('nosotros');
Route::get('/servicios', [App\Http\Controllers\HomeController::class, 'servicios'])->name('servicios');
Route::get('/proyectos', [App\Http\Controllers\HomeController::class, 'proyectos'])->name('proyectos');
Route::get('/contactanos', [App\Http\Controllers\HomeController::class, 'contactanos'])->name('contactanos');
Route::get('/detalle-proyecto', [App\Http\Controllers\HomeController::class, 'detalle_proyecto'])->name('detalle-proyecto');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
