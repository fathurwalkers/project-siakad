<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function AuthLogin()
    {
        //
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
