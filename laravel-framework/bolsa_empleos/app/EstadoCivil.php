<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class estadocivil extends Model
{
    use SoftDeletes;

    protected $table = 'estado_civil';
    protected $primaryKey = 'cod_civil';
    public $timestamps = false;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'estado',
    ];

    public function personas()
    {
    	return $this->hasMany('App\persona','cod_civil','cod_civil');
    }
}
