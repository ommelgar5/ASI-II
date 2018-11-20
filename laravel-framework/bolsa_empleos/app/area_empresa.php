<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class area_empresa extends Model
{
    protected $table = 'area_empresa';
    protected $primaryKey = 'cod_area';
    public $incrementing = false;

    public function cargos(){
    	return $this->hasMany('App\cargo_empresa','cod_area','cod_area');
    }
}
