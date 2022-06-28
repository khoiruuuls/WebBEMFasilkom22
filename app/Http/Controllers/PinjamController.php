<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PinjamController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.aplikasi-publik.pinjam');
    }
}
