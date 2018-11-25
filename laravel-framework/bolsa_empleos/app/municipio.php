<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class municipio extends Model
{
    use SoftDeletes;

    protected $table = 'municipio';
    protected $primaryKey = 'cod_municipio';
    public $timestamps = false;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'municipio',
        'cod_departamento'
    ];

    public function departamento()
    {
        return $this->belongsTo('App\departamento','cod_departamento','cod_departamento');
    }
}
