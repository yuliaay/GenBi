<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Activity;
use App\Exports\ActivityExport;
use Maatwebsite\Excel\Facades\Excel;



class ActivityController extends Controller
{
	public function index()
    {
       // $activities = Activity::all();
    	return view('kegiatan.index', compact('activities'));
    }

    public function get_datatable()
    {
        // Using Eloquent
        return Datatables::eloquent(Activity::query())
        ->addIndexColumn()
        ->addColumn('aksi', function(Activity $act) {
            return view('includes.action_buttons.activity', compact('act'))->render();
        })
        ->rawColumns(['aksi'])
        ->make(true);
    }

    public function create()
    {
        return view('kegiatan.create');
    }

    public function store()
    {
    	Activity::create([
    		'tanggal' => request('tanggal'),
    		'peserta' => request('peserta'),
    		'tempat' => request('tempat'),
    		'nama_kegiatan' => request('nama_kegiatan'),
    		'bentuk_kegiatan' => request('bentuk_kegiatan'),
    		'jenis_kegiatan' => request('jenis_kegiatan')
    	]);

        return redirect()->route('kegiatan.index');

    }

    public function edit(Activity $activity){
    
        return view('kegiatan.edit', compact('activity'));
    }

    public function update(Activity $activity){
        
        $activity->update([
            'tanggal' => request('tanggal'),
            'peserta' => request('peserta'),
            'tempat' => request('tempat'),
            'nama_kegiatan' => request('nama_kegiatan'),
            'bentuk_kegiatan' => request('bentuk_kegiatan'),
            'jenis_kegiatan' => request('jenis_kegiatan')
        ]);

        return redirect()->route('kegiatan.index');
    }

    public function destroy(Activity $activity)
    {
        $activity->delete();
        return redirect()->route('kegiatan.index');
    }

    public function export() 
    {
        return Excel::download(new ActivityExport, 'kegiatan.xlsx');
    }

}
