<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class programa_solicitante extends Model
{
    protected $table = 'programa_solicitante';
    protected $primaryKey = 'cod_progr_solic';
    public $timestamps = false; 

    protected $fillable = [
        'cod_programa', 
        'cod_nivel',
    ];

    public function persona()
    {
        return $this->belongsTo('App\persona','persona_id','dui');
    }

    public function  programa(){
        return $this->belongsTo('App\programa','cod_programa','cod_programa');
    }

    public function  nivel(){
        return $this->belongsTo('App\nivel','cod_nivel','cod_nivel');
    }
}
