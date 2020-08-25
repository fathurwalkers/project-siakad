<?php

namespace App\Http\Controllers\Api;

use App\Login;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\LoginResource;

class LoginController extends Controller
{
    public function index()
    {
        // $data = Login::all();
        return LoginResource::collection(Login::all());
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

    public function indexapi(Request $request)
    {
        // $data = Http::get('http://127.0.0.1:8001/api/getapi');
        // $data->json();
        // dd($data);
        return view('indexapi');
    }
}
