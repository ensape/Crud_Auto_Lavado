<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    protected $primaryKey = 'idservicio';
    use HasFactory;
    protected $fillable = [
        'descripcion',
        'costo',
        'fechareg',
        'estatus'
    ];
}
