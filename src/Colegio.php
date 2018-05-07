<?php

namespace Digitalmiig\Colegiomiig;

use Illuminate\Database\Eloquent\Model;

class Colegio extends Model
{
    
    protected $table = 'colegios';
	public $timestamps = true;

	public function user(){
		return $this->belongsTo('User');
	}

	public function representante(){
		return $this->belongsTo('Representante');
	}

	public function datos(){

    return $this->hasMany('App\Dato');
    }

}



