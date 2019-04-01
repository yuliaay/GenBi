<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Exceptions\Exception;
use Yajra\DataTables\Facades\DataTables;
use App\Absensi;
use DB;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\AbsensiExport;

class AbsensiController extends Controller
{

    public function getJoins()
    {
        return view('datatables.fluent.joins');
    }

    public function getJoinsData()
    {
        $absensi = DB::table('absensis') //part ini error data tidak tampil
            ->join('pertemuans', 'absensis.id_pertemuan', '=', 'pertemuans.id')
            ->join('users', 'absensis.id_user', '=', 'users.id')
            ->select('pertemuans.pertemuan', 'users.name', 'absensis.konfirmasi')
            ->get();
       return Datatables::of($absensi)
        ->addIndexColumn()
       //->addColumn('aksi', function(Absensi $ra) {
         //  return view('includes.action_buttons.absensi', compact('ra'))->render();
        //})
        //->rawColumns(['aksi'])
        ->make(true);
    }


    public function export() 
    {
        return Excel::download(new AbsensiExport, 'absensi.xlsx');
    }



    public function index()
    {
        return view('rekap_absensi.index', compact('absensi'));
    }
}
