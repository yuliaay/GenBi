<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Data;
use App\User;

class DataController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::id());

        if($user->data) {
            return view('datapribadi.index', compact('user'));
        }else{
            return redirect(route('datapribadi.edit'));
        }
    	
    }

    public function edit()
    {
        return view('datapribadi.edit');
    }

    public function update()
    {
    	data::create([
            'user_id' => Auth::id(),
    		'nama' => request('nama'),
    		'nim' => request('nim'),
    		'jenis_kelamin' => request('jenis_kelamin'),
    		'universitas' => request('universitas'),
    		'fakultas' => request('fakultas'),
    		'ipk' => request('ipk'),
    		'tempat_lahir' => request('tempat_lahir'),
    		'tanggal_lahir' => request('tanggal_lahir'),
    		'agama' => request('agama'),
    		'golongan_darah' => request('golongan_darah'),
    		'suku_bangsa' => request('suku_bangsa'),
    		'alamat' => request('alamat'),
    		'no_hp' => request('no_hp'),
    		'facebook' => request('facebook'),
    		'instagram' => request('instagram'),
    		'nama_ibu' => request('nama_ibu'),
    		'nama_ayah' => request('nama_ayah'),
    		'minat_bakat' => request('minat_bakat'),
    		'keterampilan' => request('keterampilan'),
    		'potensi' => request('potensi'),
    		'aktivitas_sosial' => request('aktivitas_sosial'),
    		'bersedia_aktif' => request('bersedia_aktif'),
    		'saran' => request ('saran')
    	]);

        return redirect('/dp');

    }
}
 