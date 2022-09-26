<?php

namespace App\Http\Controllers\Admin;

use Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\BemitoryRequest;
use App\Models\Bemitory;
use App\Models\Peminjam;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use App\Mail\KirimEmail;
use App\Mail\KirimEmailDisetujui;
use App\Mail\KirimEmailDitolak;
use Mail;

class BemitoryController extends Controller
{

    
    
    public function __construct()
    {
        parent::__construct();

        $this->data['currentAdminMenu'] = 'aplikasi';
        $this->data['currentAdminSubMenu'] = 'bemitory';

        $this->data['status_barang'] = Bemitory::status_barang();

        $this->middleware('role:Admin|Humas|Operator');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['bemitory'] = Bemitory::orderBy('id', 'DESC')->paginate(10);
        $this->data['peminjaman'] = Peminjaman::orderBy('id', 'DESC')->paginate(10);

        return view('pages.admin.bemitory.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.bemitory.form', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BemitoryRequest $request)
    {
        $params = $request->validated();
        $params['slug'] = Str::slug($params['kode_barang']);
        

        if (Bemitory::create($params)) {
            return redirect()->route('bemitory.index')->with('success', 'Data berhasil ditambahkan');
        }

        return redirect()->route('bemitory.index')->with('error', 'Data gagal ditambahkan');
    }


    public function form()
    {
        return view('pages.admin.bemitory.form');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bemitory = Bemitory::findOrFail($id);

        $this->data['bemitory'] = $bemitory;

        return view('pages.admin.bemitory.form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BemitoryRequest $request, $id)
    {
        $params = $request->validated();
        $params['slug'] = Str::slug($params['kode_barang']);

        $bemitory = Bemitory::findOrFail($id);

        if ($bemitory->update($params)) {
            $bemitory->touch();
            return redirect()->route('bemitory.index')->with('success', 'Data berhasil diperbarui');
        }

        return redirect()->route('bemitory.index')->with('error', 'Data gagal diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bemitory = Bemitory::findOrFail($id);

        if ($bemitory->delete()) {
            return redirect()->route('bemitory.index')->with('success', 'Data berhasil dihapus');
        }

        return redirect()->route('bemitory.index')->with('error', 'Data gagal dihapus');
    }

    public function Tersedia($id) {
        Bemitory::find($id)->update(['status_barang' => 'tersedia']);
        return redirect()->route('bemitory.index');
    }
    
    public function Kosong($id) {
        Bemitory::find($id)->update(['status_barang' => 'kosong']);
        return redirect()->route('bemitory.index');
    }

    public function disetujui($id) {
        Peminjaman::find($id)->update(['status' => 'disetujui']);
         Mail::to('laravelll2022@gmail.com')->send(new KirimEmailDisetujui());
         return redirect()->route('bemitory.index');
    }

    public function ditolak($id) {
        Peminjaman::find($id)->update(['status' => 'ditolak']);
        Mail::to('laravelll2022@gmail.com')->send(new KirimEmailDitolak());
        return redirect()->route('bemitory.index');
}
    public function dibatalkan($id) {
        Peminjaman::find($id)->update(['status' => 'dibatalkan']);
        return redirect()->route('pinjam.dibatalkan');
}
}
