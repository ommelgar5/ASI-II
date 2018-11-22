<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class oferta_programa extends Model
{
    protected $table = 'oferta_programa';
    protected $primaryKey = 'cod_oferta_prog';
    public $timestamps = false;


    public function programa(){
        return $this->belongsTo('App\programa','cod_programa','cod_programa');
    }

    public function oferta_laboral(){
        return $this->belongsTo('App\oferta_laboral','cod_oferta','cod_oferta');
    }

    public function nivel(){
        return $this->belongsTo('App\nivel','cod_nivel','cod_nivel');
    }
}

