<?php

namespace App\Http\Controllers;
use App\Models\Timing;
use Illuminate\Http\Request;

class TimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $timing = Timing::orderBy('created_at','desc')->simplePaginate(5);
        return view('admin.timings.index',compact('timing'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.timings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'time'=>'required'
        ]);
        Timing::create($formFields);
        return redirect()->route('timing')->with('message','Time added successfully');
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
        $time = Timing::findOrFail($id);
        return view('admin.timings.edit',compact('time'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $time = Timing::findOrFail($id);
        $formFields = $request->validate([
            'time'=>'required'
        ]);
        $time->update($formFields);
        return redirect()->route('timing')->with('message','Time updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $time = Timing::findOrFail($id);
        $time->delete();
        return redirect()->route('timing')->with('message','Time deleted succesfully');
    }
}
