<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class nivel extends Model
{
    use SoftDeletes;

    protected $table = 'nivel';
    protected $primaryKey = 'cod_nivel';
    public $timestamps = false;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'nivel'
    ];

    public function programa_solicitante(){
        return $this->hasMany('App\programa_solicitante','cod_nivel','cod_nivel');
    }

    public function idioma_solicitante(){
        return $this->hasMany('App\idioma_solicitante','cod_nivel','cod_nivel');
    }
}
