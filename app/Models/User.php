<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    protected $table = 'tb_user';
    protected $primaryKey = 'nik';

    protected $fillable = [
        'nik',
        'name',
        'email',
        'gender',
        'phone',
        'position',
        'company',
        'address'
    ];

    protected $hidden = [
        'password'
    ];
}
