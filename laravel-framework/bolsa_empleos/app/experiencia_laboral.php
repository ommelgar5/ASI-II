<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class experiencia_laboral extends Model
{
    protected $table = 'experiencia_laboral';
    protected $primaryKey = 'cod_experiencia';
    public $timestamps = false; 

    protected $fillable = [
        'persona_id',
        'cod_giro',
        'cod_cargo',
        'empresa',
        'puesto',
        'descripcion',
        'a_inicio',
        'a_fin',
        'actual'
    ];
}
