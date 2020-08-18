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

    public function postdaftar(Request $request)
    {
        $data = new Login;
        $data = Login::create([
            'username' => $request->username,
            'password' => $request->password,
            'level' => $request->level
        ]);
        $data->save();
        return redirect('/admin/login');
    }

    public function login()
    {
        if (!session('sesi_user')) {
            return view('adminlogin');
        }
        return redirect('/admin/beranda');
    }

    public function ceklogin(Request $request)
    {
        $user = Login::where('username', $request->username)->firstOrFail();
        if ($user) {
            if ($request->password == $user->password) {
                if ($user->level === 1) {
                    session(['sesi_user' => $user]);
                    return redirect('/admin/beranda');
                }
            }
        }
        return redirect('/admin/login')->with('status_fail', 'Login gagal, username atau password salah!');
    }

    public function beranda()
    {
        if (!session('sesi_user')) {
            return redirect('/admin/login');
        }
        $users = session('sesi_user');
        return view('adminberanda', compact('users'));
    }

    public function alert()
    {
        return view('welcome');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/admin/login')->with('status', 'Anda telah logout!');
    }
}
