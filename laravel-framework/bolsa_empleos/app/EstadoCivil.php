<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estadocivil extends Model
{
    protected $table = 'estado_civil';
    protected $primaryKey = 'cod_civil';

    public function personas()
    {
    	return $this->hasMany('App\Persona','cod_civil','cod_civil');
    }
}
