<?php

namespace App\Http\Controllers\Admin;

use Str;
use App\Models\Report;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReportRequest;


class BemitoryController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->data['currentAdminMenu'] = 'aplikasi';
        $this->data['currentAdminSubMenu'] = 'bemitory';

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
        $this->data['reports'] = Report::orderBy('created_at', 'DESC')->paginate(10);

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
    public function store(ReportRequest $request)
    {
        $params = $request->validated();
        $params['slug'] = Str::slug($params['nama']);

        if (Report::create($params)) {
            return redirect()->route('bemitory.index')->with('success', 'Data berhasil ditambahkan');
        }

        return redirect()->route('bemitory.index')->with('error', 'Data gagal ditambahkan');
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

        return view('pages.admin.bemitory.form', $this->data);
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
        $report = Report::findOrFail($id);

        if ($report->delete()) {
            return redirect()->route('bemitory.index')->with('success', 'Data berhasil dihapus');
        }

        return redirect()->route('bemitory.index')->with('error', 'Data gagal dihapus');
    }


}
