<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estudio extends Model
{
    protected $table = 'estudio';
    protected $primaryKey = 'cod_estudio';
    
    protected $fillable = [
        'cod_nivel_est', 
        'cod_area_est', 
        'especialidad', 
        'a_inicio', 
        'a_fin', 
        'actual', 
        'persona_id', 
        'nombre_institucion'
    ];

    public function persona()
    {
        return $this->belongsTo('App\Persona','persona_id','dui');
    }
}
