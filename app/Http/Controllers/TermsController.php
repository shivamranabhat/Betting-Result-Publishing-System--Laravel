<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Terms;

class TermsController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $terms = Terms::orderBy('created_at','desc')->simplePaginate(5);
        return view('admin.terms.index',compact('terms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.terms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title'=>'required',
            'description'=>'required',
        ]);
        Terms::create($formFields);
        return redirect()->route('terms')->with('message','Terms & Conditions added successfully');
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
        $terms= Terms::findOrFail($id);
        return view('admin.terms.edit',compact('terms'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $terms= Terms::findOrFail($id);
        $formFields = $request->validate([
            'title'=>'required',
            'description'=>'required',
        ]);
        $terms->update($formFields);
        return redirect()->route('terms')->with('message','Terms & Conditions updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $terms= Terms::findOrFail($id);
        $terms->delete();
        return redirect()->route('terms')->with('message','Terms & Conditions updated successfully');
    }
}
