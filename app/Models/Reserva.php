<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
     protected $fillable = [
        'paquete_id',
        'nombre_completo',
        'email',
        'telefono',
        'cantidad_personas',
        'mensaje', // 👈 AÑADIDO
    ];

    // Relaciones (opcional)
    public function paquete()
    {
        return $this->belongsTo(PaqueteTuristico::class, 'paquete_id');
    }
}
