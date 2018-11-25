<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tipo_contrato extends Model
{
    use SoftDeletes;

    protected $table = 'tipo_contrato';
    protected $primaryKey = 'cod_contrato';
    public $timestamps = false;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'contrato'
    ];
}

