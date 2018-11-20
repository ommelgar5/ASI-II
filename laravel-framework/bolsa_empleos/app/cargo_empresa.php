<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cargo_empresa extends Model
{
    protected $table = 'cargo_empresa';
    protected $primaryKey = 'cod_cargo';
    public $incrementing = false;

    public function experiencia_laboral(){
        return $this->hasMany('App\experiencia_laboral','cod_cargo','cod_cargo');
    }

    public function ofertas_laboral(){
    	return $this->hasMany('App\oferta_laboral','cod_cargo','cod_cargo');
    }
}
