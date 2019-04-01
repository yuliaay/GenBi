<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisPertemuan extends Model
{
	protected $guarded = [];

    public function pertemuans(){
    	return $this->hasMany('App\Pertemuan');
    }
}
