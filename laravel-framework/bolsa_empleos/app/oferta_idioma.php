<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class oferta_idioma extends Model
{
    protected $table = 'oferta_idioma';
    protected $primaryKey = 'cod_oferta_idioma';
    public $timestamps = false;

    protected $fillable = [
        'cod_oferta',
        'cod_idioma',
        'cod_nivel',
    ];

    public function oferta_laboral(){
        return $this->belongsTo('App\oferta_laboral','cod_oferta','cod_oferta');
    }

    public function idioma(){
        return $this->belongsTo('App\idioma','cod_idioma','cod_idioma');
    }


    public function nivel(){
        return $this->belongsTo('App\nivel','cod_nivel','cod_nivel');
    }


}
