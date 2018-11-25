<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class a_experiencia extends Model
{
    use SoftDeletes;

    protected $table = 'a_experiencia';
    protected $primaryKey = 'cod_a_experiencia';
    public $timestamps = false;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'a_experiecia'
    ];

    public function personas()
    {
    	return $this->hasMany('App\persona','cod_a_experiencia','cod_a_experiencia');
    }
}
