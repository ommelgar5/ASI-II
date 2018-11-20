<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class area_estudio extends Model
{
 	protected $table = 'area_estudio';

    public function estudio(){
        return $this->hasMany('App\estudio','cod_area_est','cod_area_est');
    }


}
