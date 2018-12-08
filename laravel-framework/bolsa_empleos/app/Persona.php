<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    // protected $table = 'personas';

    public $timestamps = false;

    protected $fillable = [
        'nombre', 
        'apellido', 
        'cod_genero', 
        'fech_nac', 
        'telefono1', 
        'telefono2', 
        'cod_civil', 
        'cod_a_experiencia', 
        'vehiculo', 
        'cod_licencia', 
        'cod_tipo_usuario', 
        'correo'
    ];

    public function usuarios()
    {
    	return $this->hasMany('App\User','dui','dui');
    }

    public function estudios()
    {
        return $this->hasMany('App\estudio','persona_id','id');
    }

    public function licencia()
    {
        return $this->belongsTo('App\licencia','cod_licencia','cod_licencia');
    }

    public function genero()
    {
        return $this->belongsTo('App\genero','cod_genero','cod_genero');
    }

    public function estadocivil()
    {
        return $this->belongsTo('App\estadocivil','cod_civil','cod_civil');
    }

    public function a_experiencia(){
//    	return $this->belongsTo('App\a_experiencia','cod_a_experiencia','cod_a_experiencia');
    	return $this->belongsTo('App\a_experiencia','cod_a_experiencia','cod_a_experiencia');
    }

    public function tipo_usuario()
    {
        return $this->hasMany('App\tipo_usuario','cod_tipo_usuario','cod_tipo_usuario');
    }

    public function experiencia_laboral(){
        return $this->hasMany('App\experiencia_laboral','persona_id','id');
    }

    public function idiomas(){
        return $this->belongsToMany('App\idioma', 'idioma_solicitante', 'persona_id', 'cod_idioma');
    }

    public function aplicaciones()
    {
        return $this->hasMany('App\gestion');
    }

    public function direccion()
    {
        return $this->hasMany('App\direccion_solicitante','persona_id','id');
    }






}
