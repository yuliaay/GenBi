<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Data;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class DatasExport implements FromCollection, WithHeadings, ShouldAutoSize 
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Data::select('nama', 'nim', 'jenis_kelamin', 'universitas', 'fakultas', 'ipk', 'tempat_lahir', 'tanggal_lahir', 'agama', 'golongan_darah', 'suku_bangsa', 'alamat', 'no_hp', 'facebook', 'instagram', 'nama_ibu', 'nama_ayah', 'minat_bakat', 'keterampilan', 'potensi', 'aktivitas_sosial','bersedia_aktif', 'saran')->get();
    }

    public function headings(): array {
    	return ['Nama', 'NIM', 'Jenis Kelamin', 'Universitas', 'Fakultas', 'IPK', 'Tempat Lahir', 'Tanggal Lahir', 'Agama', 'Golongan Darah', 'Suku Bangsa', 'Alamat', 'No. HP', 'Facebook', 'Instagram', 'Nama Ibu', 'Nama Ayah', 'Minat Bakat', 'Keterampilan', 'Potensi', 'Aktivitas Sosial','Bersedia Aktif', 'Saran'];
    }
}
