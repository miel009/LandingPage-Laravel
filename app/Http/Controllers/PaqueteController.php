<?php

namespace App\Http\Controllers;

use App;
use App\Models\PaqueteTuristico;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReservaRequest;

use Illuminate\Http\Request;

class PaqueteController extends Controller
{
public function index()
{
    $paquetes = PaqueteTuristico::all();
    return view('paquetes.index', compact('paquetes'));
}

public function reservar($id)
{
    $paquete = PaqueteTuristico::findOrFail($id);
    return view('paquetes.reservar', compact('paquete'));
}

}
