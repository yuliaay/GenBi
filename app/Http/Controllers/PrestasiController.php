<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;
use App\Prestasi;
use App\Pertemuan;
use App\User;
use App\Exports\PrestasiExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Collection;

class PrestasiController extends Controller
{
    public function index_id()
    {
        $user_id = User::find(Auth::id()); //part ini masih errorr
        $prestasi = DB::table('prestasis') //part ini error data tidak tampil
            ->where('user_id', $user_id)
            ->get();  
        //return $prestasis;
        return view('prestasi.index1', compact('prestasis'));
    }

    public function index()
    {
        
        //return $prestasis;
        return view('prestasi.index', compact('prestasis'));
    }

     public function get_datatable()
    {
        // Using Eloquent
        $query = Prestasi::select('prestasis.*');
        return Datatables::eloquent($query)
        ->addIndexColumn()
        ->editColumn('nama', function($query) {
            return $query->user->name;
        })
        ->addColumn('aksi', function(Prestasi $pre) {
            return view('includes.action_buttons.prestasi', compact('pre'))->render();
        })
        ->rawColumns(['aksi'])
        ->make(true);
    }


     public function get_datatable_id()
    {
        // Using Eloquent
        $user_id = User::find(Auth::id()); //part ini masih errorr
        $prestasi = DB::table('prestasis') //part ini error data tidak tampil
            
            ->where('user_id', $user_id)
            ->get();       
        return Datatables::of($prestasi)
        ->addIndexColumn()
        ->addColumn('aksi', function(Prestasi $pre) {
            return view('includes.action_buttons.prestasi', compact('pre'))->render();
        })
        ->rawColumns(['aksi'])
        ->make(true);
    }

    public function create()
    {
        return view('prestasi.create');
    }

    public function store()
    {
    	Prestasi::create([
    		'user_id' => Auth::user()->id,
    		'nama_prestasi' => request('nama_prestasi'),
    		'tahun' => request('tahun'),
    		'tingkat' => request('tingkat')
    	]);

        return redirect()->route('prestasi.index');

    }

    public function edit(Prestasi $prestasi){
    
        return view('prestasi.edit', compact('prestasi'));
    }

    public function update(Prestasi $prestasi){
        
        $prestasi->update([
            'user_id' => Auth::id(),
    		'nama_prestasi' => request('nama_prestasi'),
    		'tahun' => request('tahun'),
    		'tingkat' => request('tingkat')
        ]);

        return redirect()->route('prestasi.index');
    }

    public function export() 
    {
        return Excel::download(new PrestasiExport, 'prestasi.xlsx');
    }

    public function destroy(Prestasi $prestasi)
    {
        $prestasi->delete();
        return redirect()->route('prestasi.index');
    }
}
