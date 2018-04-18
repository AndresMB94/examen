<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresarios extends Model
{
    //
    protected $tabla = 'empresarios';

    protected $fillable = ['codigo', 'razonsocial', 'nombre', 'pais', 'estado', 'ciudad', 'telefono', 'correo', 'activo'];

    public $timestamps = false;
}
