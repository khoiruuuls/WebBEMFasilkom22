<?php

namespace App\Http\Controllers\PINJAM;

use App\Http\Controllers\Controller;
use App\Models\Peminjam;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class RiwayatController extends Controller
{
    public function index(){
        $data  = Peminjaman::all();
        return view('pages.pinjam-bem.peminjaman.riwayat',compact('data'));
    }

    public function exportpdf(Request $request,$id){

        $data = Peminjaman::find($id);
        
        $pdf = PDF::loadView('suratpinjam-bemitory', ['data' => $data]);
        return $pdf->download('sp-bemitory.pdf');

    }
}
