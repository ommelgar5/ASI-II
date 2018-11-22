<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class experiencia_oferta extends Model
{
    protected $table = 'experiencia_oferta';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'cod_oferta',
        'cod_cargo',
    ];


    public function  oferta_laboral(){
        return $this->belongsTo('App\oferta_laboral','cod_oferta','cod_oferta');
    }

    public function  cargo(){
        return $this->belongsTo('App\cargo_empresa','cod_cargo','cod_cargo');
    }


}
