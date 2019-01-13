<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Artikel;

class ArtikelController extends Controller
{
    private $allowedExt = ["jpg", "jpeg", "png"];

    public function index()
    {
        return view('artikel.index', compact('articles'));
    }

    public function get_datatable()
    {
        // Using Eloquent
        return Datatables::eloquent(Artikel::query())
        ->addIndexColumn()
        ->addColumn('aksi', function(Artikel $art) {
            return view('includes.action_buttons.article', compact('art'))->render();
        })
        ->rawColumns(['aksi'])
        ->make(true);
    }

    public function create()
    {
        return view('artikel.create');
    }

    public function store(Request $req)
    {
        $image = 'noimage.jpeg';
        $reqImg = $req->file('gambar');

        if($req->hasFile('gambar')) {
            $filenameWithExt = $reqImg->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $ext = $reqImg->getClientOriginalExtension();

            if(in_array($ext, $this->allowedExt)) {
                $newFileName = $filename . '_' . time() . '.' . $ext;
                $path = $reqImg->move(public_path('img/artikel'), $newFileName);
                $image = $newFileName;
            }else{
                die('Error: Illegal file was uploaded.');
            }

        }

        Artikel::create([
            'judul' => $req->input('judul'),
            'kategori' => $req->input('kategori'),
            'konten' => $req->input('konten'),
            'gambar' => $image
        ]);

        return redirect()->route('artikel.index');

    }

    public function edit(Artikel $artikel){
        return view('artikel.edit', compact('artikel'));
    }

    public function update(Request $req, Artikel $artikel){

        $image = $artikel->gambar;
        $reqImg = $req->file('gambar');

        if($req->hasFile('gambar')) {
            $filenameWithExt = $reqImg->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $ext = $reqImg->getClientOriginalExtension();

            if(in_array($ext, $this->allowedExt)) {
                File::delete(public_path('img/artikel') . '/' . $image);
                
                $newFileName = $filename . '_' . time() . '.' . $ext;
                $path = $reqImg->move(public_path('img/artikel'), $newFileName);
                $image = $newFileName;
                
            }else{
                die('Error: Illegal file was uploaded.');
            }
        }

        $artikel->update([
            'judul' => $req->input('judul'),
            'kategori' => $req->input('kategori'),
            'konten' => $req->input('konten'),
            'gambar' => $image
        ]);

        return redirect()->route('artikel.index');
    }

    public function destroy(Artikel $artikel)
    {
        if($artikel->delete()) {

            if($artikel->gambar != 'noimage.jpeg') {
                File::delete(public_path('img/artikel') . '/' . $artikel->gambar);
            }

            return redirect()->route('artikel.index');
        }else{
            die('Error: cannot delete the article');
        }
        
    }

    public function show(Artikel $artikel) {
        return view('artikel.show', compact('artikel'));
    }
}
