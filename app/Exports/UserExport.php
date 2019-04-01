<?php

namespace App\Exports;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class UserExport implements FromCollection, WithHeadings, ShouldAutoSize 
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::select('name', 'email', 'hak_akses')->get();
    }

    public function headings(): array {
    	return ['Nama', 'Email', 'Hak Akses'];
    }
}
