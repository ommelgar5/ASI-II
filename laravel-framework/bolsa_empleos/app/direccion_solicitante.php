<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class direccion_solicitante extends Model
{
    //
    protected $table = 'direccion_solicitante';
    protected $primaryKey = 'cod_direccion';
    public $timestamps = false;

    protected $fillable = [
        'lugar',
        'referencia',
        'persona_id',
        'cod_municipio'
    ];

    public function municipio()
    {
        return $this->belongsTo('App\municipio','cod_municipio','cod_municipio');
    }

    public function persona()
    {
        return $this->belongsTo('App\persona', 'persona_id','persona_id');
    }




}
