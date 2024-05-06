<?php

namespace App\Http\Controllers;

use App\Models\Rapid;
use App\Models\Officer;
use Illuminate\Http\Request;

class RapidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $officer=Officer::all();
        $rapid=Rapid::all();
        return view ('rapid_response.index',compact('rapid','officer'));
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
        $officer = Officer::findOrFail($request->officer_id);
        $officer->rapid()->create([
            'destination' => $request->destination,
            'book_in' => $request->book_in,
            'book_out' => $request->book_out,
            'visit' => $request->visit,

        ]);

        return redirect()->route('rapid_response.index')->with('message','Occurrence created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rapid $rapid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rapid $rapid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rapid $rapid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rapid $rapid)
    {
        //
    }
}
