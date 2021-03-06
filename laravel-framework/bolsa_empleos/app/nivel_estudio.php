<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nivel_estudio extends Model
{
    protected $table = 'nivel_estudio';
    protected $primaryKey = 'cod_nivel_est';

    public function estudio(){
        return $this->hasMany('App\estudio','cod_nivel_est','cod_nivel_est');
    }

    public function estudio_oferta(){
        return $this->hasMany('App\estudio_oferta','cod_nivel_est','cod_nivel_est');
    }

    public function oferta_laboral(){
        return $this->belongsToMany('App\oferta_laboral');
    }
}
