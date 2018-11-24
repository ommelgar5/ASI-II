<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class direccion_solicitante extends Model
{
    //
    protected $table = 'direccion_solicitante';
    protected $primaryKey = 'cod_direccion';
    public $timestamps = false;

    protected $fillable = [
        'lugar',
        'referencia',
        'persona_id',
        'cod_municipio'
    ];
}
