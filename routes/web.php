<?php

use App\Http\Controllers\DestinoController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;


//Route::get('/', HomeController::class);


//Route::get('/posts', [PostController::class,  'index']);
Route::get('/', function() {
    return view('home');
    
    })->name('/');

Route::get('/paquete', function() {
    return view('paquete');
    
})->name('paquete');    
     

Route::get('/destino', function() {
    return view('destino');
    
})->name('destino');

Route::get('/contacto', function() {
    return view('contacto');
    
})->name('contacto');

