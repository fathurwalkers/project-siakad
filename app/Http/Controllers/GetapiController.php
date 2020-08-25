<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;

class GetapiController extends Controller
{
    public function index()
    {
        // $data = Login::all();
        Login::all();
        // return response()->json(
        //     [
        //         "data" => $data
        //     ],
        //     200
        // );
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

    public function indexapi()
    {
        $data = Http::get('https://jsonplaceholder.typicode.com/todos');
        dd($data);
        return view('indexapi');
        // return view('indexapi');
    }
}
