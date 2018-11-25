<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class giro_empresa extends Model
{
    use SoftDeletes;

    protected $table = 'giro_empresa';
    protected $primaryKey = 'cod_giro';
    public $timestamps = false;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'giro'
    ];



    public function experiencia_laboral(){
        return $this->hasMany('App\experiencia_laboral','cod_giro','cod_giro');
    }

    public function empresa()
    {
    	return $this->hasMany('App\empresa','cod_giro','cod_giro');
    }
}
