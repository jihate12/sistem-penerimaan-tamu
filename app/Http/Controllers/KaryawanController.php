<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Kegiatan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Exports\KegiatanExport;
use App\Exports\TamuExport;
use Maatwebsite\Excel\Facades\Excel;

class KaryawanController extends Controller
{
    public function index()
    {
        $data['karyawan'] = Karyawan::all();
        $user = auth()->user()->name;
        return view('superadmin.dahsboardsuperadmin', ['karyawan' => $data['karyawan'], 'user' => $user]);
    }

    public function show_user()
    {
        $admin = auth()->user()->name;
        $data['user'] = User::all();
        return view('superadmin.dashboardsuperadminuser', ['user' => $data['user'], 'admin' => $admin]);
    }

    public function show_kegiatan()
    {
        $user = auth()->user()->name;
        $data['kegiatan'] = DB::table('tb_kegiatan')
            ->join('tb_user', 'tb_user.nik', '=', 'tb_kegiatan.nik')
            ->select('tb_user.nik', 'tb_user.name', 'tb_kegiatan.id_kegiatan', 'tb_kegiatan.nip', 'tb_kegiatan.departemen', 'tb_kegiatan.jam_datang', 'tb_kegiatan.tanggal')
            ->get();
        // $karyawan = Karyawan::find($data['kegiatan']->nip);
        for ($i = 0; $i < count($data['kegiatan']); $i++) {
            $karyawan = Karyawan::find($data['kegiatan'][$i]->nip)->toArray();
            $data['kegiatan'][$i]->bertemu_nama = $karyawan['name'];
        }
        return view('superadmin.dashboardsuperadminkegiatan', ['kegiatan' => $data['kegiatan'], 'user' => $user]);
    }

    public function index_tambah_karyawan()
    {
        $user = auth()->user()->name;
        return view('superadmin.superadmindetailtambahpegawai', ['user' => $user]);
    }

    public function index_input_karyawan(Request $request)
    {
        $request->validate([
            'nip' => 'required|unique:tb_karyawan',
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|unique:tb_karyawan',
            'departemen' => 'required',
            'position' => 'required',
            'password' => 'required',
            'level' => 'required',
        ]);

        $user = new Karyawan();
        $user->nip = $request->nip;
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->departemen = $request->departemen;
        $user->position = $request->position;
        $user->password = Hash::make($request->password);
        $user->level = $request->level;
        $user->save();
        return redirect()->route('show-pegawai')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function export_excel_kegiatan()
    {
        return Excel::download(new KegiatanExport, 'kegiatan.xlsx');
    }

    public function export_excel_tamu()
    {
        return Excel::download(new TamuExport, 'tamu.xlsx');
    }
}
