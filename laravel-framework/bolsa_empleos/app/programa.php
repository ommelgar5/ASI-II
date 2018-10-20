<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class programa extends Model
{
    protected $table = 'programa';
    protected $primaryKey = 'cod_programa';
    public $timestamps = false;
}
