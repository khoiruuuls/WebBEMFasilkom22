<?php

namespace App\Http\Controllers\Aplikasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PinjamController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.aplikasi-publik.pinjam');
    }
}
