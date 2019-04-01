<?php

namespace App\Exports;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Prestasi;
use Maatwebsite\Excel\Concerns\FromCollection;
use DB;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;


class PrestasiExport implements FromCollection, WithHeadings, ShouldAutoSize 
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DB::table('prestasis') //part ini error data tidak tampil
            ->join('users', 'prestasis.user_id', '=', 'users.id')
            ->select('users.name','prestasis.nama_prestasi', 'prestasis.tahun', 'prestasis.tingkat')
            ->get();
         Prestasi::select('name', 'nama_prestasi', 'tahun', 'tingkat')->get();
    }

    public function headings(): array {
    	return ['Nama', 'Prestasi', 'Tahun', 'Tingkat'];
    }
}
