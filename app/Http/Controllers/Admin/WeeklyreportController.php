<?php

namespace App\Http\Controllers\Admin;

use App\Authorizable;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Http\Requests\WeeklyreportRequest;
use App\Models\User;
use App\Models\Weeklyreport;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WeeklyreportController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->data['currentAdminMenu'] = 'weeklyreport';
        $this->data['currentAdminSubMenu'] = '';

        $this->middleware('role:Humas');
    }
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['weeklyreports'] = Weeklyreport::forUser(Auth::user())->orderBy('id', 'ASC')->get();

        return view('pages.admin.weeklyreport.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['user'] = Auth::user();

        return view('pages.admin.weeklyreport.form', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $params = $request->except('_token');
        $params['slug'] = Str::slug($params['laporan']);
        $params['id_user'] = Auth::user()->id;

        if (Weeklyreport::create($params)) {
            return redirect()->route('weeklyreport.index')->with('success', 'Laporan berhasil ditambahkan');
        }

        return redirect()->route('weeklyreport.index')->with('error', 'Laporan gagal ditambahkan');
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
        $event = Event::findOrFail($id);

        $this->data['event'] = $event;

        return view('pages.admin.event.form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EventRequest $request, $id)
    {
        $params = $request->validated();
        $params['slug'] = Str::slug($params['judul']);

        $event = Event::findOrFail($id);

        if ($request->has('image')) {
            $image = $request->file('image');
            $name = $params['slug'] . '_' . time();
            $fileName = $name . '.' . $image->getClientOriginalExtension();

            $folder = '/uploads/event/images';
            $filePath = $image->storeAs($folder, $fileName, 'public');

            $params = [
                'judul' => $params['judul'],
                'slug' => $params['slug'],
                'path' => $filePath,
                'konten' => $params['konten'],
                'tanggal' => $params['tanggal'],
            ];
        }

        if ($event->update($params)) {
            return redirect()->route('event.index')->with('success', 'Event berhasil diperbarui');
        }

        return redirect()->route('event.index')->with('error', 'Event gagal diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::findOrFail($id);

        if ($event->delete()) {
            return redirect()->route('event.index')->with('success', 'Event berhasil dihapus');
        }

        return redirect()->route('event.index')->with('error', 'Event gagal dihapus');
    }
}
