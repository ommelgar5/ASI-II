<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class genero extends Model
{
    use SoftDeletes;

    protected $table = 'genero';
    protected $primaryKey = 'cod_genero';
    public $incrementing = false;
    public $timestamps = false;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'genero'
    ];

    public function personas()
    {
    	return $this->hasMany('App\persona','cod_genero','cod_genero');
    }
}
