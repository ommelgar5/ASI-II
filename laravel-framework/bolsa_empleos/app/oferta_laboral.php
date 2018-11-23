<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class oferta_laboral extends Model
{
    //
    protected $table = 'oferta_laboral';
    protected $primaryKey = 'cod_oferta';
    public $timestamps = false;
    
    protected $fillable = [
        'titulo',
        'descripcion',
        'numero_plaza',
        'cod_contrato',
        'cod_a_experiencia',
        'cod_genero',
        'edad_min',
        'edad_max',
        'salario_min',
        'salario_max',
        'vehiculo',
        'cod_licencia',
    ];

    public function empresa(){
        return $this->belongsTo('App\empresa','nit','nit');
    }

    public function tipo_contrato(){
        return $this->belongsTo('App\tipo_contrato','cod_contrato','cod_contrato');
    }

    public function a_experiencia(){
        return $this->belongsTo('App\a_experiencia','cod_a_experiencia','cod_a_experiencia');
    }

    public function genero(){
        return $this->belongsTo('App\genero','cod_genero','cod_genero');
    }

    public function licencia(){
        return $this->belongsTo('App\licencia','cod_licencia','cod_licencia');
    }

    public function cargo_empresa()
    {
        return $this->belongsToMany('App\cargo_empresa', 'experiencia_oferta', 'cod_oferta', 'cod_cargo');
    }
    public function niveles_estudio(){
    	return $this->belongsToMany('App\nivel_estudio','estudio_oferta','cod_oferta','cod_nivel_est');
    }

    public function programas_oferta(){
    	return $this->hasMany('App\programas_oferta','cod_oferta','cod_oferta');
    }

    public function idiomas_oferta(){
        return $this->hasMany('App\idiomas_oferta','cod_oferta','cod_oferta');
    }

    public function aplicaciones()
    {
        return $this->hasMany('App\gestion', 'cod_oferta', 'cod_oferta');
    }


    public function experiencia_oferta(){
        return $this->hasMany('App\experiencia_oferta','cod_oferta','cod_oferta');
    }

    public function estudio_oferta(){
    	return $this->belongsToMany('App\nivel_estudio','estudio_oferta','cod_oferta','cod_nivel_est');
    }

    public function idiomas(){
        return $this->belongsToMany('App\idioma', 'oferta_idioma', 'cod_oferta', 'cod_idioma');
    }

    public function programas(){
        return $this->belongsToMany('App\programa', 'oferta_programa', 'cod_oferta', 'cod_programa');
    }

    public function oferta_programa(){
        return $this->hasMany('App\oferta_programa','cod_oferta','cod_oferta');
    }



}
