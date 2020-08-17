<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Login;

class AdminController extends Controller
{
    public function daftar()
    {
        return view('adminregister');
    }

    public function login()
    {
        return view('adminlogin');
    }

    public function ceklogin(Request $request)
    {
        $user = Login::where('username', $request->username)->firstOrFail();
        if ($user) {
            if ($request->password == $user->password) {
                session(['sesi_user' => $user]);
                return redirect('/admin/beranda');
            }
        }

        return redirect('/admin/login')->with('fail', 'Login gagal');
    }

    public function beranda()
    {
        if (!session('sesi_user')) {
            return redirect('/admin/login');
        }
        // dd(session('sesi_user'));

        return view('adminberanda');
    }

    public function alert()
    {
        return view('welcome');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/admin/login');
    }
}
