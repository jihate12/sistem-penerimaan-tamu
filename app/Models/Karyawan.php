<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Karyawan extends Authenticatable
{
    use HasFactory;
    protected $table = 'tb_karyawan';
    protected $primaryKey = 'nip';

    protected $fillable = [
        'nip',
        'name',
        'phone',
        'departemen',
        'email',
        'position',
        'level'
    ];

    protected $hidden = [
        'password'
    ];
}
