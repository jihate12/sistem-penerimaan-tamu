<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Kegiatan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class KegiatanController extends Controller
{
    public function index()
    {
        $data['title'] = 'Data Hub';
        return view('user.index', $data);
    }

    public function create()
    {
        $data['karyawan'] = Karyawan::all();
        return view('user.datakegiatan', ['karyawan' => $data['karyawan']]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_kegiatan' => 'unique:tb_kegiatan',
            'nik' => 'required',
            'nip' => 'required',
            'tanggal' => 'required',
            'jam_datang' => 'required',
            'jam_pulang' => 'required',
            'departemen' => 'required',
            'lokasi' => 'required',
            'keterangan' => 'required',
            // 'bertemu_nama' => 'required',
            'plat' => 'required',
            'status' => 'required'
        ]);

        $kegiatan = new Kegiatan($request->all());
        $kegiatan->save();
        $kegiatan->refresh();

        $karyawan = Karyawan::where('nip', $request->nip)->get()->toArray();
        $request->nama_karyawan = $karyawan[0]['name'];
        $request->departmen = $karyawan[0]['departemen'];

        $user = User::where('nik', $request->nik)->get()->toArray();
        $request->nama_tamu = $user[0]['name'];
        $request->institusi = $user[0]['company'];

        $tamu = new User();
        $tamu->name = $user[0]['name'];
        $tamu->phone = $user[0]['phone'];
        $tamu->position = $user[0]['position'];
        $tamu->company = $user[0]['company'];
        $tamu->email = $user[0]['email'];

        $surat_kegiatan = new Kegiatan();
        $surat_kegiatan->nik = $request->nik;
        $surat_kegiatan->bertemu_nama = $karyawan[0]['name'];


        \Mail::to($karyawan[0]['email'])->send(new \App\Mail\MailNotification($request));
        \Mail::to($tamu->email)->send(new \App\Mail\UserMailNotification($request));
        $url = '/kegiatan/notif/' . $kegiatan->id_kegiatan;
        return redirect($url);
    }

    public function showall()
    {
        $user = auth()->user()->name;
        $data['kegiatan'] = DB::table('tb_kegiatan')
            ->join('tb_user', 'tb_user.nik', '=', 'tb_kegiatan.nik')
            ->select('tb_user.nik', 'tb_user.name', 'tb_kegiatan.id_kegiatan', 'tb_kegiatan.nip', 'tb_kegiatan.departemen', 'tb_kegiatan.jam_datang', 'tb_kegiatan.tanggal', 'tb_kegiatan.status')
            ->get();

        for ($i = 0; $i < count($data['kegiatan']); $i++) {
            $karyawan = Karyawan::find($data['kegiatan'][$i]->nip)->toArray();
            $data['kegiatan'][$i]->bertemu_dengan = $karyawan['name'];
        }
        return view('admin.dashboardkegiatan', ['kegiatan' => $data['kegiatan'], 'user' => $user]);
    }

    public function show_notif($id)
    {
        $data['surat'] = Kegiatan::find($id);
        $data['user'] = User::find($data['surat']->nik);
        // $data['karyawan'] = Karyawan::find($data['surat']->nip);
        return view('user.notif', $data);
    }

    public function downloadpdf($id)
    {
        dd($id);
        // $data['surat'] = Kegiatan::find($id);
        // $tamu = User::find($data['surat']->nik);
        // $pdf = PDF::loadview('user.suratpdf', ['surat' => $data['surat'], 'user' => $tamu]);
        // $html = view('user.surat')->render();
        // $pdf = PDF::loadhtml('user.surat');
        // $namafile = $tamu->name . "_" . $data['surat']->id_kegiatan . ".pdf";
        // return $pdf->download($namafile);
        // return $pdf->inline();
    }

    public function tambah_kegiatan_tamu()
    {
        $nik = auth::guard('user')->user()->nik;
        $user = User::where('nik', $nik)->get();
        $data['nik'] = $nik;
        $data['karyawan'] = Karyawan::all();
        return view('user.tambahtamu', ['nik' => $data['nik'], 'karyawan' => $data['karyawan'], 'user' => $user]);
    }

    public function edit($kegiatan)
    {
        $user = auth()->user()->name;
        $data = Kegiatan::where('id_kegiatan', $kegiatan)->get();
        $karyawan = Karyawan::find($data[0]->nip)->toArray();
        $data[0]->bertemu_nama =  $karyawan['name'];
        return view('admin.detailkegiatan', ['kegiatan' => $data, 'user' => $user]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'status' => 'required',
            'id_kegiatan' => 'required'
        ]);

        Kegiatan::where('id_kegiatan', $request->id_kegiatan)->update(array('Status' => $request->status));
        return redirect()->route('show-kegiatan');
    }

    public function destroy($kegiatan)
    {
        Kegiatan::where('id_kegiatan', $kegiatan)->delete();
        return back()->with('success', 'Data Berhasil Dihapus');
    }
}
