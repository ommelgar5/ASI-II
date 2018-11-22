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
}
