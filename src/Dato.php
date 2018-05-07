<?php

namespace Digitalmiig\Colegiomiig;

use Illuminate\Database\Eloquent\Model;

class Dato extends Model
{
    
    protected $table = 'datos';
	public $timestamps = false;

	public function colegios(){
		return $this->belongsTo('Colegio');
	}
}