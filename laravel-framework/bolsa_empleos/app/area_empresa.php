<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class area_empresa extends Model
{
    use SoftDeletes;

    protected $table = 'area_empresa';
    protected $primaryKey = 'cod_area';
    public $incrementing = false;
    public $timestamps = false;

    protected $dates = ['deleted_at'];

    protected $fillable = [
       'area'
    ];

    public function cargos(){
    	return $this->hasMany('App\cargo_empresa','cod_area','cod_area');
    }
}
