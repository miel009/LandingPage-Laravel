<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Contacto extends Model
{
    protected $fillable = ['nombre', 'email', 'mensaje'];


}
