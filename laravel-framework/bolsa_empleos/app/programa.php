<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class programa extends Model
{
    protected $table = 'programa';
    protected $primaryKey = 'cod_programa';
    public $timestamps = false;

    public function programa_solicitante(){
        return $this->hasMany('App\programa_solicitante','cod_programa','cod_programa');
    }
}
