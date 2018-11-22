<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class idioma extends Model
{
    protected $table = 'idioma';
    protected $primaryKey = 'cod_idioma';
    public $timestamps = false;


    public function idioma_solicitante(){
        return $this->hasMany('App\idioma_solicitante','cod_idioma','cod_idioma');
    }

    public function persona()
    {
        return $this->belongsToMany('App\persona');
    }

    public function oferta_laboral()
    {
        return $this->belongsToMany('App\oferta_laboral');
    }
}
