<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class idiomas_oferta extends Model
{
    //
	protected $table = 'oferta_idioma';
    protected $primaryKey = 'cod_oferta_idioma';

    public function idioma(){
    	return $this->belongsTo('App\idioma','cod_idioma','cod_idioma');
    }

    public function nivel(){
    	return $this->belongsTo('App\nivel','cod_nivel','cod_nivel');
    }
}
