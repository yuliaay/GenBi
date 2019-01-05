<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Prestasi;

class PrestasiController extends Controller
{
    public function index()
    {
        $prestasis = Prestasi::all();
    	return view('prestasi.index', compact('prestasis'));
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

    public function destroy(Prestasi $prestasi)
    {
        $prestasi->delete();
        return redirect()->route('prestasi.index');
    }
}
