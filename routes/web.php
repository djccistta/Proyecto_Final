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
/* Route::get('/paquetes', function () {
    return view('Paquete');
});  */
Route::get('/contactanos', function () {
    return view('Contactanos');
});
Route::get('/nosotros', function () {
    return view('Nosotros');
});
Route::get('/reservar', function () {
    return view('Reservas');
});


Auth::routes(['reset'=>false]);
//index con lista de paquetes
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');;
            /* //CRUD de reservas para el administrador */
Route::get('/reservas', [App\Http\Controllers\HomeController::class, 'reservas'])->middleware('auth');;
//muestra el formulario de reservas
Route::get('/reservas.nuevo', [App\Http\Controllers\ReservaController::class, 'nuevo'])->name('nuevo')->middleware('auth');;
//guarda en la base de datos
Route::post('/reserva.nuevo',[App\Http\Controllers\ReservaController::class, 'savereserve'])
->name('savereserve')->middleware('auth');;
//lista las reservas
Route::get('/reservas', [App\Http\Controllers\ReservaController::class, 'lista'])
->name('reserva.lista')->middleware('auth');;
//elimina un reserva
Route::get('/elimina/{res}',[App\Http\Controllers\ReservaController::class, 'delete'])
->name("reserve.delete")->middleware('auth');;
//actualizacion de reservas
Route::get('/actualizar/{id}',[App\Http\Controllers\ReservaController::class, 'update'])
->name("reserva.update")->middleware('auth');;
Route::POST('/actualizar',[App\Http\Controllers\ReservaController::class, 'updatesave'])
->name("update.save")->middleware('auth');;
            /* //fin administrador */
//muestra al usuario el formulario de reservas con la reserva seleccionada
Route::get('/reserva-tour/{id}',[App\Http\Controllers\ReservaController::class, 'reservapaquete'])
->name("reserva-tour");
//guarda la reserva desde la vista del usuario
Route::get('/reservar',[App\Http\Controllers\ReservaController::class, 'savereserva'])
->name('reserva.save');


//RUTAS PARA EL CRUD DE PAQUETES
//Abre el formulario para crear un nuevo paquete

Route::get('/nuevopaquete','App\Http\Controllers\PaqueteController@nuevo')->middleware('auth');
//Guarda nuevo paquete
Route::post('/home','App\Http\Controllers\PaqueteController@CrearPaquete')->name('CrearPaquete')->middleware('auth');
//Lista Los Paquetes

Route::get('/Nuestros-Paquetes', [App\Http\Controllers\PaqueteController::class, 'ListaPaqueteInicio'])->name('Paquete.listaInicio');
//Obtiene los datos de un registro por id para cargarlos en el formulario y ser actualizados
Route::get('/Actualizar/{id}','App\Http\Controllers\PaqueteController@Actualizar1')->middleware('auth');
//Guarda los datos actualizados
Route::post('/Actualizar','App\Http\Controllers\PaqueteController@Actualizar2')->name('ActualizarPaquete')->middleware('auth');
//Elimina un registro por id
Route::get('/Borrar/{id}','App\Http\Controllers\PaqueteController@BorrarPaquete')->middleware('auth');
