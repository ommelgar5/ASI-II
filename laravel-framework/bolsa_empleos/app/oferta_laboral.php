<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class oferta_laboral extends Model
{
    //
    protected $table = 'oferta_laboral';
    protected $primaryKey = 'cod_oferta';

    public function empresa(){
    	return $this->belongsTo('App\empresa','nit','nit');
    }

    public function cargo(){
    	return $this->belongsTo('App\cargo_empresa','cod_cargo','cod_cargo');
    }

    public function tipo_contrato(){
    	return $this->belongsTo('App\tipo_contrato','cod_contrato','cod_contrato');
    }

    public function tiempo_experiencia(){
    	return $this->belongsTo('App\a_experiencia','cod_a_experiencia','cod_a_experiencia');
    }

    public function genero(){
    	return $this->belongsTo('App\genero','cod_genero','cod_genero');
    }

    public function licencia(){
    	return $this->belongsTo('App\licencia','cod_licencia','cod_licencia');
    }

    public function niveles_estudio(){
    	return $this->belongsToMany('App\nivel_estudio','estudio_oferta','cod_oferta','cod_oferta');
    }

}
