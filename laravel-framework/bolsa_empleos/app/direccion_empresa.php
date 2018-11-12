<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class direccion_empresa extends Model
{
    //
    protected $table = 'direccion_empresa';
    protected $primaryKey = 'cod_direccion_emp';
    public $timestamps = false;

    protected $fillable = [
        'lugar',
        'referencia',
        'nit',
        'cod_municipio'
    ];
}
