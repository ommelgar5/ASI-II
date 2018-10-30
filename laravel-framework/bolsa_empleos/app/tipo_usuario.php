<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo_usuario extends Model
{
    protected $table = 'tipo_usuario';
    protected $primaryKey = 'cod_tipo_usuario';

    public function personas()
    {
    	return $this->hasMany('App\persona','cod_tipo_usuario','cod_tipo_usuario');
    }
}
