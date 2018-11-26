<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class cargo_empresa extends Model
{
    use SoftDeletes;

    protected $table = 'cargo_empresa';
    protected $primaryKey = 'cod_cargo';
    public $timestamps = false;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'cargo',
        'cod_area'
    ];



    public function experiencia_laboral(){
        return $this->hasMany('App\experiencia_laboral','cod_cargo','cod_cargo');
    }

    public function ofertas_laboral(){
    	return $this->hasMany('App\oferta_laboral','cod_cargo','cod_cargo');
    }

    public function oferta_laboral()
    {
        return $this->belongsToMany('App\oferta_laboral','experiencia_oferta','cod_cargo','cod_oferta');
    }

    public function experiencia_oferta(){
        return $this->hasMany('App\experiencia_oferta','cod_cargo','cod_cargo');
    }

    public function area_empresa(){
        return $this->belongsTo('App\area_empresa','cod_area','cod_area');
    }
}
