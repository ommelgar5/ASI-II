<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class idioma extends Model
{
    use SoftDeletes;

    protected $table = 'idioma';
    protected $primaryKey = 'cod_idioma';
    public $timestamps = false;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'idioma',
    ];



    public function idioma_solicitante(){
        return $this->hasMany('App\idioma_solicitante','cod_idioma','cod_idioma');
    }

    public function persona()
    {
        return $this->belongsToMany('App\persona');
    }

    public function oferta_laboral()
    {
        return $this->belongsToMany('App\oferta_laboral');
    }
}
