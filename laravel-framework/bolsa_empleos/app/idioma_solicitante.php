<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class idioma_solicitante extends Model
{
    protected $table = 'idioma_solicitante';
    protected $primaryKey = 'cod_idioma_solic';
    public $timestamps = false; 

    protected $fillable = [
        'cod_idioma', 
        'cod_nivel',
    ];

    public function persona()
    {
        return $this->belongsTo('App\persona','persona_id','dui');
    }

    public function  idioma(){
        return $this->belongsTo('App\idioma','cod_idioma','cod_idioma');
    }

    public function  nivel(){
        return $this->belongsTo('App\nivel','cod_nivel','cod_nivel');
    }
}
