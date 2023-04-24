<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Game;
use App\Models\Timing;
use App\Models\Result;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $results = Result::orderBy('rank','asc')->simplePaginate(5);
        return view('admin.results.index',compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $games = Game::all();
        $time = Timing::all();
        return view('admin.results.create',compact('games','time'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name'=>'required',
            'bet_number'=>'required',
            'game_id'=>'required',
            'time_id'=>'required',
            'rank'=>'required',
        ]);
        Result::create($formFields);
        return redirect()->route('results')->with('message','Result published successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $games = Game::all();
        $time = Timing::all();
        $result = Result::findOrFail($id);
        return view('admin.results.edit',compact('games','time'),compact('result'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $result = Result::findOrFail($id);
        $formFields = $request->validate([
            'name'=>'required',
            'bet_number'=>'required',
            'game_id'=>'required',
            'time_id'=>'required',
            'rank'=>'required',
        ]);
        $result->update($formFields);
        return redirect()->route('results')->with('message','Result updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $result = Result::findOrFail($id);
        $result->delete();
        return redirect()->route('results')->with('message','Result deleted successfully');
    }
}
