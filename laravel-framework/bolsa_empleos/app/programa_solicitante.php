<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class programa_solicitante extends Model
{
    protected $table = 'programa_solicitante';
    protected $primaryKey = 'cod_progr_solic';
    public $timestamps = false; 

    protected $fillable = [
        'cod_programa', 
        'cod_nivel', 
        'persona_id'
    ];
}
