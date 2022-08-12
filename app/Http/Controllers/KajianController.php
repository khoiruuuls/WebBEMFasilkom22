<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KajianController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.kajian');
    }
}
