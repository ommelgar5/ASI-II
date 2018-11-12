<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empresa extends Model
{
    protected $table = 'empresa';
    protected $primaryKey = 'nit';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'nit',
        'pass',
        'nombre_comercial',
        'nombre_juridico',
        'descripcion',
        'correo',
        'telefono1',
        'telefono2',
        'logo',
        'cod_giro'
    ];
}
