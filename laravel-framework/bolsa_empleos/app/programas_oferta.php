<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class programas_oferta extends Model
{
    //
    protected $table = 'oferta_programa';
    protected $primaryKey = 'cod_oferta_prog';

    public function programa(){
    	return $this->belongsTo('App\programa','cod_programa','cod_programa');
    }

    public function nivel(){
    	return $this->belongsTo('App\nivel','cod_nivel','cod_nivel');	
    }
}
