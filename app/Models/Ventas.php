<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    protected $primaryKey = 'idventa';
    use HasFactory;
    protected $fillable = [
        'fecha',
        'idvehiculo',
        'idtrabajador',
        'idservicio',
        'estatus'
    ];
}
