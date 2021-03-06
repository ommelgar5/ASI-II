<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class programa extends Model
{
    use SoftDeletes;

    protected $table = 'programa';
    protected $primaryKey = 'cod_programa';
    public $timestamps = false;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'programa'
    ];


    public function programa_solicitante(){
        return $this->hasMany('App\programa_solicitante','cod_programa','cod_programa');
    }

    public function oferta_programa(){
        return $this->hasMany('App\oferta_programa','cod_programa','cod_programa');
    }


    public function oferta_laboral()
    {
        return $this->belongsToMany('App\oferta_laboral');
    }


}
