<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertemuan extends Model
{
    protected $guarded = [];

    public function jenis_pertemuan(){
    	return $this->belongsTo('\App\JenisPertemuan', 'id_jenis_pertemuan', 'id');
    }
}
