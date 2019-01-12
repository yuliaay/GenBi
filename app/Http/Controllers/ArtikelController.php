<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArtikelController extends Controller
{
    public function index()
    {
    	return view('artikel.index');
    }

    public function create()
    {
        return view('artikel.create');
    }

    public function store()
    {
    	Artikel::create([
    		'judul' => request('judul'),
    		'kategori' => request('kategori'),
    		'konten' => request('konten'),
    		'file' => request('file')
    	]);

        return redirect()->route('artikel.index');

    }

    public function edit(Artikel $artikel){
    
        return view('artikel.edit', compact('artikel'));
    }

    public function update(Artikel $artikel){
        
        $artikel->update([
            'judul' => request('judul'),
    		'kategori' => request('kategori'),
    		'konten' => request('konten'),
    		'file' => request('file')
        ]);

        return redirect()->route('artikel.index');
    }

    public function destroy(Artikel $artikel)
    {
        $artikel->delete();
        return redirect()->route('artikel.index');
    }
}
