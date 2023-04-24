<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Privacy;
use Illuminate\Validation\Rule;

class PrivacyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $privacies = Privacy::orderBy('created_at','desc')->simplePaginate(5);
        return view('admin.privacy.index',compact('privacies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.privacy.create');
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
        Privacy::create($formFields);
        return redirect()->route('privacy')->with('message','Privacy Policy added successfully');
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
        $privacy= Privacy::findOrFail($id);
        return view('admin.privacy.edit',compact('privacy'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $privacy= Privacy::findOrFail($id);
        $formFields = $request->validate([
            'title'=>'required',
            'description'=>'required',
        ]);
        $privacy->update($formFields);
        return redirect()->route('privacy')->with('message','Privacy Policy updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $privacy= Privacy::findOrFail($id);
        $privacy->delete();
        return redirect()->route('privacy')->with('message','Privacy Policy updated successfully');
    }

}
