<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estudio_oferta extends Model
{
    protected $table = 'estudio_oferta';
    protected $primaryKey = 'cod_estudio_oferta';
    public $timestamps = false;
    protected $fillable = [
        'cod_oferta',
        'cod_nivel_est',
    ];

    public function  oferta_laboral(){
        return $this->belongsTo('App\oferta_laboral','cod_oferta','cod_oferta');
    }

    public function  nivel_estudio(){
        return $this->belongsTo('App\nivel_estudio','cod_nivel_est','cod_nivel_est');
    }

}
