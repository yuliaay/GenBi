<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Absensi extends Model
{
    protected $guarded = [];

    public function pertemuan()
    {
        return $this->belongsToMany(Pertemuan::class);
    }

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
