<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nivel extends Model
{
    protected $table = 'nivel';
    protected $primaryKey = 'cod_nivel';
    public $timestamps = false;

    public function programa_solicitante(){
        return $this->hasMany('App\programa_solicitante','cod_nivel','cod_nivel');
    }

    public function idioma_solicitante(){
        return $this->hasMany('App\idioma_solicitante','cod_nivel','cod_nivel');
    }
}
