<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomesController extends Controller
{
    public function homes()
    {
        return view('homes');
    }

    public function cek(Request $request)
    {
        //
    }
}
