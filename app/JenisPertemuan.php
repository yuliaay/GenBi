<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisPertemuan extends Model
{
    public function pertemuans(){
    	return $this->hasMany('App\Pertemuan');
    }
}
