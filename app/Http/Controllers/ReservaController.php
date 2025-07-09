<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use App\Http\Controllers\Controller;

class ReservaController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'paquete_id' => 'required|exists:paquetes_turisticos,id',
        'nombre_completo' => 'required|string|max:255',
        'email' => 'required|email',
        'telefono' => 'required|string|max:20',
        'cantidad_personas' => 'required|integer|min:1',
    ]);

    $reserva = Reserva::create($request->all());

    return view('paquetes.comprobante', compact('reserva'));

}
public function comprobante($paquete)
{
    
    $paquete = \App\Models\PaqueteTuristico::findOrFail($paquete);
    return view('paquetes.comprobante', compact('paquete'));
}

}
