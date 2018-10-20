<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class idioma extends Model
{
    protected $table = 'idioma';
    protected $primaryKey = 'cod_idioma';
    public $timestamps = false;
}
