<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estudio extends Model
{
    protected $table = 'estudio';
    protected $primaryKey = 'cod_estudio';
    public $timestamps = false;    
    protected $fillable = [
        'cod_nivel_est', 
        'cod_area_est', 
        'especialidad', 
        'a_inicio', 
        'a_fin', 
        'actual',
        'nombre_institucion'
    ];

    public function persona()
    {
        return $this->belongsTo('App\persona','persona_id','dui');
    }

    public function  nivel_estudio(){
        return $this->belongsTo('App\nivel_estudio','cod_nivel_est','cod_nivel_est');
    }

    public function  area_estudio(){
        return $this->belongsTo('App\area_estudio','cod_area_est','cod_area_est');
    }
}
