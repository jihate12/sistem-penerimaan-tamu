<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// use App\Models\Login as Authenticatable;

class Login extends Model
{
    use HasFactory;

    protected $table = 'tb_login';
    protected $primaryKey = 'id_login';

    protected $fillable = ['name', 'nik', 'password'];
}
