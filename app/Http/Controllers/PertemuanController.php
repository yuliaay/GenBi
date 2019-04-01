<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\JenisPertemuan;
use App\Pertemuan;
use App\Absensi;
use DateTime;

class PertemuanController extends Controller
{
    //kelola jenis pertemuan
    public function indexJenis()
    {
    	$jenis_pertemuan = JenisPertemuan::all();
    	return view('jenis_pertemuan.index', compact('jenis_pertemuan'));
    }

    public function get_datatable()
    {
        // Using Eloquent
        return Datatables::eloquent(JenisPertemuan::query())
        ->addIndexColumn()
        ->addColumn('aksi', function(JenisPertemuan $jp) {
            return view('includes.action_buttons.jenispertemuan', compact('jp'))->render();
        })
        ->rawColumns(['aksi'])
        ->make(true);
    }


    public function get_datatable_pertemuan()
    {
        // Using Eloquent
        $query = Pertemuan::select('pertemuans.*');

        return Datatables::eloquent($query)
        ->addIndexColumn()
        ->editColumn('id_pertemuan', function($query) {
            return $query->jenis_pertemuan->nama_pertemuan;
        })
        ->addColumn('aksi', function(Pertemuan $p) {
            return view('includes.action_buttons.pertemuan', compact('p'))->render();
        })
        ->rawColumns(['aksi'])
        ->make(true);
    }

    public function createJenis()
    {
        return view('jenis_pertemuan.create');
    }

    public function editJenis(JenisPertemuan $jenis_pertemuan)
    {
        return view('jenispertemuan.edit', compact('jenis_pertemuan'));
    }

    public function updateJenis(JenisPertemuan $jenis_pertemuan){
        
        $jenis_pertemuan->update([
            'nama_pertemuan' => request('nama_pertemuan'),
            'deskripsi_pertemuan' => request('deskripsi_pertemuan'),
        ]);

        return redirect()->route('jenispertemuan.index');
    }

    public function destroyJenis(JenisPertemuan $jenis_pertemuan)
    {
        $jenis_pertemuan->delete();
        return redirect()->route('jenispertemuan.index');
    }

    public function storeJenis()
    {
        JenisPertemuan::create([
            'nama_pertemuan' => request('nama_pertemuan'),
            'deskripsi_pertemuan' => request('deskripsi_pertemuan')
        ]);

        return redirect()->route('jenispertemuan.index');

    }

    //kelola pertemuan
    public function index()
    {
    	$pertemuans = Pertemuan::all();
    	return view('pertemuan.index', compact('pertemuans'));
    }


    public function indexpertemuan()
    {
    	$pertemuans = Pertemuan::all();
        $absensis  = Absensi::where('id_user', Auth::id())->get();

    	return view('pertemuan.pertemuan', compact('pertemuans', 'absensis'));
    }

    

    public function create(){
    	$jenis_pertemuans = JenisPertemuan::all();
    	return view('pertemuan.create', compact('jenis_pertemuans'));
    }

    public function store()
    {
    	Pertemuan::create([
    		'pertemuan' => request('pertemuan'),
    		'id_jenis_pertemuan' => request('id_jenis_pertemuan'),
    		'tanggal_pertemuan' => request('tanggal_pertemuan'),
    		'tempat' => request('tempat')
    	]);

        return redirect()->route('pertemuan.index');

    }

    //absensi
    public function storeAbsensi(Pertemuan $pertemuan)
    {
        Absensi::create([
            'id_pertemuan' => $pertemuan->id,
            'id_user' => Auth::id(),
            'konfirmasi' => 0
        ]);

        return redirect()->route('pertemuan.pertemuan');
    }




}
