<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReportRequest;
use App\Models\Report;
use Illuminate\Http\Request;
use App\Models\Pengaduan;
use Barryvdh\DomPDF\Facade\Pdf;

use Str;

class AprController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->data['currentAdminMenu'] = 'aplikasi';
        $this->data['currentAdminSubMenu'] = 'apr';

        $this->data['status'] = Report::status();

        $this->middleware('role:Admin|Humas|Operator');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['reports'] = Report::orderBy('created_at', 'DESC')->paginate(5);
        $this->data['pengaduan'] = Pengaduan::orderBy('created_at', 'DESC')->paginate(5);

        return view('pages.admin.apr.index', $this->data);
    }
    

    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function tampil()
    // {
    //      return view('pages.admin.apr.index', ['index' => $this->data['reports'], 'index2' => $this->data['mantap']]);

    // }
    

    // return view('pages.admin.apr.index', $this->data);

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.apr.form', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReportRequest $request)
    {
        $params = $request->validated();
        $params['slug'] = Str::slug($params['nama']);

        if (Report::create($params)) {
            return redirect()->route('apr.index')->with('success', 'Advokasi berhasil ditambahkan');
        }

        return redirect()->route('apr.index')->with('error', 'Advokasi gagal ditambahkan');
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
        $report = Report::findOrFail($id);

        $this->data['report'] = $report;

        return view('pages.admin.apr.form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReportRequest $request, $id)
    {
        $params = $request->validated();
        $params['slug'] = Str::slug($params['nama']);

        $report = Report::findOrFail($id);

        if ($report->update($params)) {
            $report->touch();
            return redirect()->route('apr.index')->with('success', 'Advokasi berhasil diperbarui');
        }

        return redirect()->route('apr.index')->with('error', 'Advokasi gagal diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $report = Report::findOrFail($id);

        if ($report->delete()) {
            return redirect()->route('apr.index')->with('success', 'Advokasi berhasil dihapus');
        }

        return redirect()->route('apr.index')->with('error', 'Advokasi gagal dihapus');
    }

    public function dikaji($id) {
        Pengaduan::find($id)->update(['status_pengaduan' => 'dikaji']);
        return redirect()->route('apr.index');
    }

    public function proses($id) {
        Pengaduan::find($id)->update(['status_pengaduan' => 'proses']);
        return redirect()->route('apr.index');
    }

    public function selesai($id) {
        Pengaduan::find($id)->update(['status_pengaduan' => 'selesai']);
        return redirect()->route('apr.index');
    }

    public function exportpdf(Request $request,$id){

        $item = Pengaduan::find($id);
        
        $pdf = PDF::loadView('detail-pengaduan', ['item' => $item]);
        return $pdf->download('detail-pengaduan.pdf');

    }

}
