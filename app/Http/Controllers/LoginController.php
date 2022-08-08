<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{
    public function login_index()
    {
        $data['login'] = Karyawan::all();
        return view('admin.login', ['login' => $data['login']]);
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'nip' => 'required',
            'password' => 'required'
        ]);
        // NOTE:
        // Level 1 => ADMIN
        // Level 2 => Karyawan
        if (Auth::attempt(array('nip' => $request['nip'], 'password' => $request['password']))) {
            // Admin
            if (auth()->user()->level == 1) {
                return redirect()->route('show-pegawai');
            }
            // Karyawan
            else if (auth()->user()->level == 0) {
                // dd('karyawan');
                return redirect()->route('show-tamu');
            }
        }
        // dd($request->only('nip', 'password'));
        return redirect()->back()->with('failed', 'Pasword atau nip salah');
    }

    public function logout_admin(Request $request)
    {
        Session::flush();
        Auth::guard('admin')->logout();
        return redirect('/login');
    }

    public function logout_karyawan(Request $request)
    {
        Session::flush();
        Auth::guard('admin')->logout();
        return redirect('/login');
    }
}
