<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;

class GetapiController extends Controller
{
    public function getapi()
    {
        $data = Login::all();
        return response()->json(
            [
                "message" => "data user berhasil di ambil!",
                "data" => $data
            ]
        );
    }

    public function postapi(Request $request)
    {
        $data = new Login;

        $token = Hash::make($request->username, [
            'rounds' => 12
        ]);

        $validasi = 1;

        $data = Login::create([
            'username'  => $request->username,
            'password'  => Hash::make($request->password, [
                'rounds' => 12
            ]),
            'email'     => $request->email,
            'level'     => $request->level,
            'validasi'  => $validasi,
            'token'     => $token
        ]);

        $data->save();

        return response()->json(
            [
                "message" => "data user berhasil di tambah!",
                "data" => $data
            ]
        );
    }
}
