<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class giro_empresa extends Model
{
    protected $table = 'giro_empresa';
    protected $primaryKey = 'cod_giro';
    public $incrementing = false;
}
