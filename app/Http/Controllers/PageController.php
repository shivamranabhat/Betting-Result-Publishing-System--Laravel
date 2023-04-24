<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;
use App\Models\Game;
use App\Models\Timing;
use App\Models\Privacy;
use App\Models\Terms;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $results = Result::orderBy('rank','asc')->simplePaginate(5);
        return view('admin.index',compact('results'));
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
    public function privacy()
    {
        $privacy = Privacy::all();
        return view('privacy',compact('privacy'));
    }
    public function terms()
    {
        $terms = Terms::all();
        return view('terms',compact('terms'));
    }
    public function login()
    {
        return view('login');
    }
     //Authenticate user
     public function authenticate(Request $request)
     {
         $formFields = $request->validate([
             'email'=>['required','email'],
             'password'=>'required'
         ]);
         if(auth()->attempt($formFields))
         {
            $request->session()->regenerate();
            return redirect('/admin')->with('message','Login successfully');
         }
         return back()->withErrors(['email'=>'Invalid credentials'])->onlyInput('email');

     }
     //Logout user
     public function logout(Request $request)
     {
         auth()->logout();
         $request->session()->invalidate();
         $request->session()->regenerateToken();
         return redirect('/login')->with('message','Logged out successfully!');
     }

}
