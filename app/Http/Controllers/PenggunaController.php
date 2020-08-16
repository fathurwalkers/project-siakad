<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function login()
    {
        return view('userlogin');
    }

    public function beranda()
    {
        return view('userberanda');
    }
}
