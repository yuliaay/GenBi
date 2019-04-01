<?php

namespace App\Exports;

use App\absensi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;
use Illuminate\Support\Collection;

class AbsensiExport implements FromCollection, WithHeadings, ShouldAutoSize 
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DB::table('absensis') //part ini error data tidak tampil
            ->join('pertemuans', 'absensis.id_pertemuan', '=', 'pertemuans.id')
            ->join('users', 'absensis.id_user', '=', 'users.id')
            ->select('users.name', 'pertemuans.pertemuan', 'absensis.konfirmasi')
            ->get();
    }

    public function headings(): array {
    	return ['Nama', 'Pertemuan', 'konfirmasi'];
    }
}
