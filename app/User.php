<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'hak_akses',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    //Method Relasi
    public function data(){
        return $this->hasOne('\App\Data', 'user_id', 'id');
    }

    public function prestasi(){
        return $this->hasMany('App\Prestasi');
    }

    public function absensi(){
        return $this->hasMany('App\Absensi');
    }

    public function pertemuan()
    {
        return $this->belongsToMany(Pertemuan::class);
    }

}
