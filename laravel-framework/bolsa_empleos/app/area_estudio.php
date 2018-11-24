<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class area_estudio extends Model
{
    use SoftDeletes;

 	protected $table = 'area_estudio';
    protected $primaryKey = 'cod_area_est';
    public $incrementing = false;
    public $timestamps = false;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'area_est',
    ];


    public function estudio()
    {
        return $this->hasMany('App\estudio', 'cod_area_est', 'cod_area_est');
    }

    public function estudio_oferta()
    {
        return $this->hasMany('App\estudio_oferta', 'cod_area_est', 'cod_area_est');
    }

}
