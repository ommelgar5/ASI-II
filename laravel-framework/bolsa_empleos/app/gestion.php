<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gestion extends Model
{
    //
	protected $table = 'gestion';
    protected $primaryKey = 'cod_gestion';
    public $timestamps = false;

    public function oferta_laboral(){
    	return $this->belongsTo('App\oferta_laboral','cod_oferta','cod_oferta');
    }
}