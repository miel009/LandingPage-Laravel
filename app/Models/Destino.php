<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre', 'descripcion', 'pais', 'ciudad', 'precio', 'imagen', 'activo'
    ];
}
