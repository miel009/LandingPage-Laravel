<?php

use App\Http\Controllers\DestinoController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaqueteController;
use App\Http\Controllers\ReservaController;
use App\Models\PaqueteTuristico;

Route::get('/', function () {
    return view('home'); // vista princ de inicio

})->name('/');

Route::get('/paquetes', [PaqueteController::class, 'index'])->name('paquetes.index');

// ver formulario para reservar 
Route::get('/paquetes/{paquete}/reservar', [PaqueteController::class, 'reservar'])->name('paquetes.reservar');

Route::get('/reserva/{paquete}/comprobante', [ReservaController::class, 'comprobante'])->name('reserva.comprobante');
// -->form de reserva
Route::post('/reservar', [ReservaController::class, 'store'])->name('reservas.store');

Route::get('/contacto', function () {
    return view('contacto');

})->name('contacto');

