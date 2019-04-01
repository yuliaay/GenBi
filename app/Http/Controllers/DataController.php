<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;
use App\Data;
use App\User;
use App\Exports\UserExport;
use App\Exports\DatasExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Collection;
use DB;

class DataController extends Controller
{

    public function get_datatable()
    {
        // Using Eloquent
        return Datatables::eloquent(User::query())
        ->addIndexColumn()
        ->addColumn('aksi', function(User $u) {
            return view('includes.action_buttons.user', compact('u'))->render();
        })
        ->rawColumns(['aksi'])
        ->make(true);
    }

    public function getJoins()
    {
        return view('datatables.fluent.joins');
    }

    public function getJoinsData()
    {
        // Using Eloquent
        $genbi = DB::table('users') //part ini error data tidak tampil
            ->join('data', 'users.id', '=', 'data.user_id')
            ->where('hak_akses', '0')
            ->select('users.*', 'data.*')
            ->get();
        return Datatables::of($genbi)
        ->addIndexColumn()
        //->addColumn('aksi', function(User $ug) {
          //  return view('includes.action_buttons.user_genbi', compact('ug'))->render();
      //  })
        ->rawColumns(['aksi'])
        ->make(true);
    }

    public function index()
    {
        $user = User::find(Auth::id());

        if($user->data) {
            return view('datapribadi.index', compact('user'));
        }else{
            return redirect(route('datapribadi.create'));
        }
    	
    }


    public function export() 
    {
        return Excel::download(new UserExport, 'users.xlsx');
    }

    public function export_data() 
    {
        return Excel::download(new DatasExport, 'data.xlsx');
    }

    public function index_user()
    {
        return view('datauser.index', compact('users'));
    }

 

    public function index_genbi()
    {
        return view('datauser.index_genbi', compact('users'));
        $genbi = DB::table('users') //part ini error data tidak tampil
            ->join('data', 'users.id', '=', 'data.user_id')
            ->where('hak_akses', '0')
            ->select('users.nama', 'data.nim', 'data.fakultas', 'data.universitas', 'data.ipk', 'data.alamat')
            ->get();
        return view('datauser.index_genbi', compact('genbi'));
    }

    public function destroyUser(User $users)
    {
        $users->delete();
        return redirect()->route('datauser.index');
    }

    public function create()
    {
        return view('datapribadi.create');
    }

    public function tambah_anggota()
    {
        return view('datauser.create_anggota');
    }

    public function store()
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

        return redirect('/home');

    }

    public function editAdmin(User $user){
        
        return view('datauser.edit', compact('user'));
    }

    public function updateAdmin(User $user){
        
        $user->update([
            
            'name' => request('name'),
            'email' => request('email'),
            'hak_akses' => request('hak_akses'),
            
        ]);

        return redirect()->route('datauser.index');
    }




    public function edit(User $user){
        $user = User::find(Auth::id());
        return view('datapribadi.edit', compact('user'));
    }

    public function update(User $user){
        
        $user->update([
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

        return redirect()->route('datapribadi.index');
    }


    public function show(User $user) {
        if($user->data) {
            return view('datapribadi.show', compact('user'));
        }else{
            return redirect(route('datapribadi.edit'));
        }
        
    }

}
 