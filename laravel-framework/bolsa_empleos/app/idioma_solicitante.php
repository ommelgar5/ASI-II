<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class idioma_solicitante extends Model
{
    protected $table = 'idioma_solicitante';
    protected $primaryKey = 'cod_idioma_solic';
    public $timestamps = false; 

    protected $fillable = [
        'cod_idioma', 
        'cod_nivel', 
        'persona_id'
    ];

}
