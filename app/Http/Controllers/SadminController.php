<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Kegiatan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SadminController extends Controller
{
    public function index_tambah_tamu()
    {
        $user = auth()->user()->name;
        return view('superadmin.superadmintambahtamu', ['user' => $user]);
    }

    public function index_input_tamu(Request $request)
    {
        $request->validate([
            'nik' => 'required|unique:tb_user',
            'name' => 'required|unique:tb_user',
            'email' => 'required',
            'password' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'position' => 'required',
            'company' => 'required',
            'address' => 'required',
        ]);

        $user = new User();
        $user->nik = $request->nik;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->gender = $request->gender;
        $user->phone = $request->phone;
        $user->position = $request->position;
        $user->company = $request->company;
        $user->address = $request->address;
        $user->save();
        return redirect()->route('show-tamu-index')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function index_tambah_kegiatan()
    {
        $admin = auth()->user()->name;
        $data['user'] = User::all();
        $data['karyawan'] = Karyawan::all();
        return view('superadmin.superadmintambahkegiatan', ['user' => $data['user'], 'karyawan' => $data['karyawan'], 'admin' => $admin]);
    }

    public function index_input_kegiatan(Request $request)
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
        return redirect()->route('show-kegiatan-index')->with('success', 'Data Berhasil Ditambahkan');;
    }

    public function edit_kegiatan($kegiatan)
    {
        $user = auth()->user()->name;
        $data['kegiatan'] = Kegiatan::where('id_kegiatan', $kegiatan)->get();
        $data['karyawan'] = Karyawan::all();
        return view('superadmin.superadmindetailkegiatan', ['kegiatan' => $data['kegiatan'], 'karyawan' => $data['karyawan'], 'user' => $user]);
    }

    public function edit_tamu($user)
    {
        $admin = auth()->user()->name;
        $data['tamu'] = User::where('nik', $user)->get();
        return view('superadmin.superadmindetailtamu', ['tamu' => $data['tamu'], 'user' => $admin]);
    }

    public function update_kegiatan(Request $request)
    {
        $request->validate([
            'id_kegiatan' => 'required',
            'tanggal' => 'required',
            'jam_datang' => 'required',
            'jam_pulang' => 'required',
            'departemen' => 'required',
            'lokasi' => 'required',
            'keterangan' => 'required',
            'bertemu_nama' => 'required',
            'plat' => 'required',
            'status' => 'required'
        ]);

        Kegiatan::where('id_kegiatan', $request->id_kegiatan)->update(array(
            'tanggal' => $request->tanggal,
            'jam_datang' => $request->jam_datang,
            'jam_pulang' => $request->jam_pulang,
            'departemen' => $request->departemen,
            'lokasi' => $request->lokasi,
            'keterangan' => $request->keterangan,
            'bertemu_nama' => $request->bertemu_nama,
            'plat' => $request->plat,
            'Status' => $request->status

        ));
        return redirect()->route('show-kegiatan-index');
    }

    public function update_tamu(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'name' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'position' => 'required',
            'company' => 'required',
            'address' => 'required'
        ]);

        User::where('nik', $request->nik)->update(array(
            'name' => $request->name,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'position' => $request->position,
            'company' => $request->company,
            'address' => $request->address,
        ));
        return redirect()->route('show-tamu-index');
    }
}
