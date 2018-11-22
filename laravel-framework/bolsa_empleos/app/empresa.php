<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class empresa extends Authenticatable
{
    use Notifiable;

    // The authentication guard for admin
    protected $guard = 'empresa';

    protected $table = 'empresa';
    protected $primaryKey = 'nit';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'nombre_comercial',
        'nombre_juridico',
        'descripcion',
        'correo',
        'telefono1',
        'telefono2',
        'cod_giro',
    ];

    public function giro_empresa()
    {
        return $this->belongsTo('App\giro_empresa','cod_giro','cod_giro');
    }
}
