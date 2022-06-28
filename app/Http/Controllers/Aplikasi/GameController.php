<?php

namespace App\Http\Controllers\Aplikasi;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\SkorGame;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index(Request $request)
    {
        $this->data['skors'] = SkorGame::orderBy('skor', 'DESC')->take(5)->get();
        return view('pages.aplikasi-publik.game', $this->data);
    }
}
