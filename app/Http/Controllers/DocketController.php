<?php

namespace App\Http\Controllers;

use App\Models\Docket;
use Illuminate\Http\Request;

class DocketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $docket = Docket::all();
        return view('dockets.index',compact('docket'));
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
        $docket = $request->all();

        // if ($image = $request->file('image')) {
        //     $destinationPath = 'images/category';
        //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        //     $image->move($destinationPath, $profileImage);
        //     $cate['image'] = "$profileImage";
        // }

        $docket = Docket::firstOrCreate([
            'name' => $docket['name'],
            'location' => $docket['location'],
            'details' => $docket['details'],

        ]);
        // // $cate = new Department;
        // $cate->name = $request->name;

        // $cate->save();

        return redirect()->route('dockets.index')->with('message','Department created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Docket $docket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Docket $docket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Docket $docket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Docket $docket)
    {
        //
    }
}
