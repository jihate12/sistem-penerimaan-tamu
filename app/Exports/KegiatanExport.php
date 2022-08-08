<?php

namespace App\Exports;

use App\Models\Karyawan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;

class KegiatanExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */

    public function headings(): array
    {
        return [
            'Nama',
            'Asal Institusi',
            'Departemen Kunjungan',
            'Lokasi Kunjungan',
            'Bertemu Dengan',
            'Keterangan',
            'Jam Datang',
            'Jam Pulang',
            'Tanggal',
            'Status'
        ];
    }

    public function collection()
    {
        $data = DB::table('tb_kegiatan')
            ->join('tb_user', 'tb_user.nik', '=', 'tb_kegiatan.nik')
            ->select('tb_user.name', 'tb_user.company', 'tb_kegiatan.lokasi', 'tb_kegiatan.nip', 'tb_kegiatan.departemen', 'tb_kegiatan.jam_datang', 'tb_kegiatan.jam_pulang', 'tb_kegiatan.tanggal', 'tb_kegiatan.status', 'tb_kegiatan.keterangan')
            ->get();
        $result = collect();
        for ($i = 0; $i < count($data); $i++) {
            $karyawan = Karyawan::find($data[$i]->nip)->toArray();
            $data[$i]->bertemu_nama = $karyawan['name'];
            $result[$i] = array(
                'nama' => $data[$i]->name,
                'perusahaan' => $data[$i]->company,
                'department'  => $data[$i]->departemen,
                'lokasi' => $data[$i]->lokasi,
                'bertemu_dengan' => $karyawan['name'],
                'keterangan' => $data[$i]->keterangan,
                'jam_datang' => $data[$i]->jam_datang,
                'jam_pulang' => $data[$i]->jam_pulang,
                'tanggal' => $data[$i]->tanggal,
                'status' => $data[$i]->status,
            );
        }

        return $result;
    }
}
