<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajadores extends Model
{
    protected $primaryKey = 'idtrabajador';
    use HasFactory;
    protected $fillable = [
        'nombre',
        'apaterno',
        'amaterno',
        'direccion',
        'telefono',
        'correo',
        'tipo',
        'contrasena',
        'estatus'
    ];
}
