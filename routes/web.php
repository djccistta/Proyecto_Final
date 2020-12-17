<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('/nuevopaquete', function () {
    return view('Paquetes/nuevo');
});




Auth::routes(['reset'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('Admin');

Route::get('/reservas', [App\Http\Controllers\HomeController::class, 'reservas'])->name('Admin');
//muestra el formulario de reservas
Route::get('/reservas.nuevo', [App\Http\Controllers\ReservaController::class, 'nuevo'])->name('nuevo');
//guarda en la base de datos
Route::post('/reserva.nuevo',[App\Http\Controllers\ReservaController::class, 'savereserve'])
->name('savereserve');
//lista las reservas
Route::get('/reservas', [App\Http\Controllers\ReservaController::class, 'lista'])
->name('reserva.lista');
//elimina un reserva
Route::get('/elimina/{res}',[App\Http\Controllers\ReservaController::class, 'delete'])
->name("reserve.delete");
Route::get('/actualizar',[App\Http\Controllers\ReservaController::class, 'update'])
->name("update");
