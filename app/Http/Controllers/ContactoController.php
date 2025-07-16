<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;
use App\Http\Controllers\Controller;    

class ContactoController extends Controller
{
   public function store(Request $request)
{
     $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email',
            'mensaje' => 'required|string',
        ]);

        // Guardar en la base de datos
        Contacto::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'mensaje' => $request->mensaje,
        ]);

    return back()->with('success', 'Mensaje enviado correctamente.');
}
}
