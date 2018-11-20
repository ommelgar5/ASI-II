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

    public function personas(){
        return $this->belongsTo('App\persona','persona_id','cod_experiencia');
    }

    public function  giro_empresa(){
        return $this->belongsTo('App\giro_empresa','cod_giro','cod_giro');
    }

    public function cargo_empresa (){
        return $this->belongsTo('App\cargo_empresa','cod_cargo','cod_cargo');
    }

}
