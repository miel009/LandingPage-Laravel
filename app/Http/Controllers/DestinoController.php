<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;    
use App\Models\Destino;
class DestinoController extends Controller
{
    public function __invoke()
    {
        return view('destino');
    }
}
