<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Http;

class FileController extends Controller
{
    public function upload(Request $request)
    {
        $file = $request->hasFile('imgktp');
        if ($file) {
            $newFile = $request->file('imgktp');
            // $filename = FileController::gen_uuid();
            // $filename .=  "." . $newFile->getClientOriginalExtension();
            // $newFile->storeas('ktpimages', $filename);
            // $url = URL::asset('storage/ktpimages/' . $filename);
            // $toPage = '/registrasi/create?img_url=' . $url;
            $base64_encoded_file = base64_encode(file_get_contents($newFile->path()));
            // $data_uri = "data:image/" . $newFile->getClientOriginalExtension() . ';base64,' . $base64_encoded_file;
            $response = FileController::http_post_request($base64_encoded_file);
            // dump($base64_encoded_file);
            $toPage = '/registrasi/create?nik=' . $response->nik . "?nama=" . $response->nama . "?gender=" . $response->jenis_kelamin;
            return redirect($toPage);

            // <--- Debuging --->

            // dump($newFile);
            // dump($newFile->getClientMimeType());
            // dump($newFile->getClientOriginalExtension());
            // dump($newFile->getClientOriginalName());
        }
    }

    public function gen_uuid()
    {
        return sprintf(
            '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            // 32 bits for "time_low"
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),

            // 16 bits for "time_mid"
            mt_rand(0, 0xffff),

            // 16 bits for "time_hi_and_version",
            // four most significant bits holds version number 4
            mt_rand(0, 0x0fff) | 0x4000,

            // 16 bits, 8 bits for "clk_seq_hi_res",
            // 8 bits for "clk_seq_low",
            // two most significant bits holds zero and one for variant DCE1.1
            mt_rand(0, 0x3fff) | 0x8000,

            // 48 bits for "node"
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff)
        );
    }

    public function http_post_request($img)
    {
        $response = Http::timeout(10)->acceptJson()->post('https://ktp-identifier.herokuapp.com/ktp', [
            'file' => $img,
        ]);

        // $response = Http::acceptJson()->get('https://catfact.ninja/fact');
        return json_decode($response->getBody());
    }
}
