<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class licencia extends Model
{
    use SoftDeletes;


    protected $table = 'licencia';
    protected $primaryKey = 'cod_licencia';
    public $timestamps = false;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'tipo'
    ];

    public function personas()
    {
    	return $this->hasMany('App\persona','cod_licencia','cod_licencia');
    }
}
