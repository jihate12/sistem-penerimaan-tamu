<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Kegiatan;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin_input_tamu(Request $request)
    {
        $request->validate([
            'nik' => 'required|unique:tb_user',
            'name' => 'required|unique:tb_user',
            'gender' => 'required',
            'phone' => 'required',
            'position' => 'required',
            'company' => 'required',
            'address' => 'required',
        ]);
        $user = new User($request->all());
        $user->save();
        // $redirect_page = 'kegiatan/create?nik=' . $request->nik;
        // return redirect($redirect_page);
        return redirect()->route('show-tamu');
    }

    public function admin_tambah_kegiatan()
    {
        $admin = auth()->user()->name;
        $data['user'] = User::all();
        $data['karyawan'] = Karyawan::all();
        return view('admin.dashboardtambahkegiatan', ['user' => $data['user'], 'karyawan' => $data['karyawan'], 'admin' => $admin]);
    }

    public function admin_input_kegiatan(Request $request)
    {
        $request->validate([
            'id_kegiatan' => 'unique:tb_kegiatan',
            'nik' => 'required',
            'tanggal' => 'required',
            'jam_datang' => 'required',
            'jam_pulang' => 'required',
            'departemen' => 'required',
            'lokasi' => 'required',
            'keterangan' => 'required',
            'nip' => 'required',
            'plat' => 'required',
            'status' => 'required'
        ]);

        $kegiatan = new Kegiatan($request->all());
        $kegiatan->save();
        $kegiatan->refresh();
        return redirect()->route('show-kegiatan');
    }
}
