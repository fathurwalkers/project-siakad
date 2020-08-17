<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function ceklogin()
    {
        $user = DB::table('data_guru')->where('username', 'aminah')->first();
        // dd($user);
        if (!isset($user)) {
            return view('adminlogin');
        } else {
            return redirect('/admin/beranda');
        }
    }

    public function beranda()
    {
        return view('adminberanda');
    }

    public function alert()
    {
        return view('welcome');
    }
}
