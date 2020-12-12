<?php

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
    return view('Inicio');
});
Route::get('/paquete', function () {
    return view('Paquete');
});
Route::get('/contactanos', function () {
    return view('Contactanos');
});
Route::get('/nosotros', function () {
    return view('Nosotros');
});
Route::get('/reservar', function () {
    return view('Reservas');
});







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('Admin');

Route::get('/reservas', [App\Http\Controllers\HomeController::class, 'reservas'])->name('Admin');
