<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;
use App\Models\Game;
use App\Models\Timing;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.index');
    }
    public function home()
    {
        $results = Result::orderBy('rank','asc')->get();
        $games = Game::all();
        $timings = Timing::orderBy('time','asc')->get();
        return view('index',compact('results','games'),compact('timings'));
    }
    public function games()
    {
        $games = Game::all();
        return view('games',compact('games'));
    }
    public function about()
    {
        return view('about');
    }

}
