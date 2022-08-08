<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;

class TamuExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */

    public function headings(): array
    {
        return [
            'Nama',
            'Email',
            'Jenis Kelamin',
            'Nomor Handphone',
            'Posisi',
            'Perusahaan',
            'Alamat perusahaan'
        ];
    }

    public function collection()
    {
        return User::select('name', 'email', 'gender', 'phone', 'position', 'company', 'address')->get();
    }
}
