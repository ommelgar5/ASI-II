<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class departamento extends Model
{
    use SoftDeletes;

    protected $table = 'departamento';
    protected $primaryKey = 'cod_departamento';
    public $timestamps = false;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'departamento'
    ];



    public function municipios()
    {
    	return $this->hasMany('App\municipio','cod_departamento','cod_departamento');
    }
}
