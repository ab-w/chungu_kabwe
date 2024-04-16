<?php

namespace App\Http\Controllers;

use App\Models\Officer;
use Illuminate\Http\Request;

class OfficerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $officer=Officer::all();
        return view ('officer.index',compact('officer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $officer = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/category';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $officer['image'] = "$profileImage";
        }

        $officer = new Officer;
        $officer->name = $request->name;
        $officer->phone_number = $request->phone_number;
        $officer->address = $request->address;
        $officer->badge_number = $request->badge_number;
        $officer->image = $profileImage;
        $officer->save();

        return redirect()->route('officer.index')->with('message','Category created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Officer $officer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Officer $officer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Officer $officer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Officer $officer)
    {
        //
    }
}
