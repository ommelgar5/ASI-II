<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class licencia extends Model
{
    protected $table = 'licencia';
    protected $primaryKey = 'cod_licencia';

    public function personas()
    {
    	return $this->hasMany('App\Persona','cod_licencia','cod_licencia');
    }
}
