<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Exports\PrestasiExport;
use Maatwebsite\Excel\Facades\Excel;

class Prestasi extends Model
{
    protected $fillable = ['user_id', 'nama_prestasi', 'tahun', 'tingkat'];

    public function user(){
    	return $this->belongsTo('\App\User', 'user_id');
    }


}


