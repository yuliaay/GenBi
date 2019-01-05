<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    protected $fillable = ['user_id', 'nama_prestasi', 'tahun', 'tingkat'];


}


