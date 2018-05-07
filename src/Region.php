<?php

namespace Digitalmiig\Colegiomiig;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    
    protected $table = 'regiones';
	public $timestamps = false;



    public function ciudades(){

    return $this->hasMany('App\Ciudad');
    }
}