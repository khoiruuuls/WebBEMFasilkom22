<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoKajianController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.aplikasi-publik.kajian');
    }
}
