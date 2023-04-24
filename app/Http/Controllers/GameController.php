<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Game;
use Illuminate\Support\Facades\Storage;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::orderBy('created_at','desc')->simplePaginate(5);
        return view('admin.games.index',compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.games.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name'=>'required',
            'image'=>'required|image'
        ]);
        if($request->hasFile('image')){
            $formFields['image']= $request->file('image')->store('games','public');
        }
        Game::create($formFields);
        return redirect()->route('games')->with('message','Game added successfully');
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
        $game = Game::findOrFail($id);
        return view('admin.games.edit',compact('game'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $game = Game::findOrFail($id);
        //if user select new image
        if($request->hasFile('image')){
            $formFields = $request->validate([
                'name'=>'required',
                'image'=>'required|image'
            ]);
            $formFields['image']= $request->file('image')->store('games','public');
            Storage::delete($game->image);
            $game->update($formFields);
        }
        //if user didn't select new image
        $fields = $request->validate([
            'name'=>'required',
        ]);
        $game->update($fields);
        return redirect()->route('games')->with('message','Game updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $game = Game::findOrFail($id);
        Storage::delete($game->image);
        $game->delete();
        return redirect()->route('games')->with('message','Game deleted succesfully');
    }
}
