<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class departamento extends Model
{
    protected $table = 'departamento';
    protected $primaryKey = 'cod_departamento';

    public function municipios()
    {
    	return $this->hasMany('App\municipio','cod_departamento','cod_departamento');
    }
}
