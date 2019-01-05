<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;

class ActivityController extends Controller
{
	public function index()
    {
        $activities = Activity::all();
    	return view('kegiatan.index', compact('activities'));
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
}
