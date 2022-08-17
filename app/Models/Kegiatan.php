<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;
    protected $table = 'tb_kegiatan';
    protected $primaryKey = 'id_kegiatan';

    protected $fillable = [
        'nik',
        'nip',
        'jam_datang',
        'jam_pulang',
        'tanggal',
        'departemen',
        'lokasi',
        'keterangan',
        'plat',
        'Status'
    ];
}
