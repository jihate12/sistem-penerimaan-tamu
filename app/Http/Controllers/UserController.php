<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Karyawan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
// use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{

    public function index()
    {
        $user = auth()->user()->name;
        // dd(auth()->user()->name);
        return view('admin.dashboardtambahtamu', ['user' => $user]);
    }

    public function search_data(Request $request)
    {
        $search = $_GET['nik'];
        $data = User::where('nik', $search)->get()->toArray();

        $url = '/tamu/dashboard/' . $data[0]['nik'];
        return redirect($url);
    }


    public function create()
    {
        return view('user.datadiri');
    }

    public function uploadview()
    {
        return view('user.upload');
    }


    public function store(Request $request)
    {
        $page_scan_wajah = env("SCANWAJAH_URL", "http://localhost:5000");
        $request->validate([
            'nik' => 'required|unique:tb_user',
            'name' => 'required|unique:tb_user',
            'email' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'position' => 'required',
            'company' => 'required',
            'address' => 'required',
        ]);
        $user = new User($request->all());
        $user->save();
        $data_request = $request->nik . "," . $request->email;
        $encoded_request = base64_encode($data_request);
        $redirect_page = $page_scan_wajah . '?request=' . $encoded_request;
        // $redirect_page = $page_scan_wajah.'kegiatan/create?nik=' . $request->nik;
        // dd($redirect_page);
        return redirect($redirect_page);
    }


    public function show()
    {
        $user = auth()->user()->name;
        $data = User::all();
        return view('admin.dashboardtamu', ['data' => $data, 'user' => $user]);
    }

    public function show_data()
    {
        $nik = auth::guard('user')->user()->nik;
        $data['kegiatan'] = Kegiatan::where('nik', $nik)->get();
        $user = User::where('nik', $nik)->get();
        for ($i = 0; $i < count($data['kegiatan']); $i++) {
            $karyawan = Karyawan::find($data['kegiatan'][$i]->nip)->get();
            $data['kegiatan'][$i]->bertemu_nama = $karyawan[0]['name'];
        }
        return view('user.dashboarduser', ['kegiatan' => $data['kegiatan'], 'user' => $user]);
    }


    public function edit($user)
    {
        $admin = auth()->user()->name;
        $data['tamu'] = User::where('nik', $user)->get();
        return view('admin.detaildatatamu', ['tamu' => $data['tamu'], 'user' => $admin]);
    }


    public function update(Request $request, User $user)
    {
        //
    }


    public function destroy($user)
    {
        Kegiatan::where('nik', $user)->delete();
        User::where('nik', $user)->delete();
        return back()->with('success', 'Data Berhasil Dihapus');
    }

    public function login_action_tamu(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'password' => 'required'
        ]);
        if (Auth::guard('user')->attempt(['nik' => $request->nik, 'password' => $request->password])) {
            return redirect()->route('dashboard-tamu');
            // dd(auth::guard('user')->user());
        }
        return redirect()->back()->with('failed', 'Pasword atau nip salah');
    }

    public function logout_user(Request $request)
    {
        Session::flush();
        Auth::guard('user')->logout();
        return redirect('/');
    }
}
