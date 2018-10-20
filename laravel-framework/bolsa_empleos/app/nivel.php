<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nivel extends Model
{
    protected $table = 'nivel';
    protected $primaryKey = 'cod_nivel';
    public $timestamps = false;
}
