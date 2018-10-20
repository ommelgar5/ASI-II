<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class genero extends Model
{
    protected $table = 'genero';
    protected $primaryKey = 'cod_genero';
    public $incrementing = false;

    public function personas()
    {
    	return $this->hasMany('App\Persona','cod_genero','cod_genero');
    }
}
