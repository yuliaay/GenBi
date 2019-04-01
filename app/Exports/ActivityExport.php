<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Activity;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;


class ActivityExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Activity::select('tanggal', 'nama_kegiatan', 'peserta', 'tempat',  'bentuk_kegiatan' , 'jenis_kegiatan')->get();
    }

    public function headings(): array {
    	return ['Tanggal', 'Nama Kegiatan', 'Peserta', 'Tempat', 'Bentuk Kegiatan' , 'Jenis Kegiatan'];
    }
}
