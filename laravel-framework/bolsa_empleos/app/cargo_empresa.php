<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cargo_empresa extends Model
{
    protected $table = 'cargo_empresa';
    protected $primaryKey = 'cod_cargo';
    public $incrementing = false;
}
