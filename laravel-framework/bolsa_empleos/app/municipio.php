<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class municipio extends Model
{
    protected $table = 'municipio';
    protected $primaryKey = 'cod_municipio';

    public function departamento()
    {
        return $this->belongsTo('App\departamento','cod_departamento','cod_departamento');
    }
}
