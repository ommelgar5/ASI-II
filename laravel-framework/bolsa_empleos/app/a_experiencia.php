<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class a_experiencia extends Model
{
    protected $table = 'a_experiencia';
    protected $primaryKey = 'cod_a_experiencia';

    protected $dates = ['deleted_at'];

    public function personas()
    {
    	return $this->hasMany('App\persona','cod_a_experiencia','cod_a_experiencia');
    }
}
