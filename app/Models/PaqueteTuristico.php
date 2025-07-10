<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaqueteTuristico extends Model
{
    use HasFactory;
    protected $table = 'paquetes_turisticos';

    protected $fillable = [
        'titulo',
        'descripcion',
        'imagen_url',
        'destino',
        'precio',
        'fecha_inicio',
        'fecha_fin',
    ];
}
