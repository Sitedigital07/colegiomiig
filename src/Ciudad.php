<?php

namespace Digitalmiig\Colegiomiig;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    
    protected $table = 'ciudades';
	public $timestamps = false;

	public function regiones(){
		return $this->belongsTo('Region');
	}
}