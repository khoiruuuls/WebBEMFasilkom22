<?php

namespace App\Http\Controllers\Admin;

use App\Authorizable;
use App\Http\Controllers\Controller;
use App\Models\Weeklyreport;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControlingController extends Controller
{
    use Authorizable;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->data['currentAdminMenu'] = 'controling';
        $this->data['currentAdminSubMenu'] = '';

        $this->middleware('role:Admin|Humas|Operator');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['users'] = User::where('prodi', 'BEM')->paginate(10);

        return view('pages.admin.controling.index', $this->data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where('id', $id)->first();
        $weeklyreports = Weeklyreport::forUser($user)->orderBy('id', 'ASC')->get();

        $this->data['user'] = $user;
        $this->data['weeklyreports'] = $weeklyreports;

        return view('pages.admin.controling.detail', $this->data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        if ($user->delete()) {
            return redirect()->route('pengusul.index')->with('success', 'User berhasil dihapus');
        }

        return redirect()->route('pengusul.index')->with('error', 'User gagal dihapus');
    }

    public function showPdf($id)
    {
        $proposal = Proposal::where('id', $id)->first();

        $filePath = $proposal->path;

        return response()->file(public_path('storage/' . $filePath));
    }

    // public function detail($id)
    // {
    //     $user = User::all()->first();
    //     $proposal = Proposal::where('id', $id)->first();
    //     $anggotas = Anggota::forProposal($proposal)->orderBy('id', 'ASC')->get();

    //     $this->data['user'] = $user;
    //     $this->data['anggotas'] = $anggotas;
    //     $this->data['proposal'] = $proposal;

    //     return view('pages.admin.pkm.user.detail-proposal', $this->data);
    // }
}
