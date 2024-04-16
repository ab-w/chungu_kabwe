<?php

namespace App\Http\Controllers;

use App\Models\Occurrence;
use App\Models\Officer;
use Illuminate\Http\Request;

class OccurrenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $officer=Officer::all();
        $occurrence=Occurrence::all();
        return view ('occurrence.index',compact('occurrence','officer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $officer=Officer::all();
        $occurrence=Occurrence::all();
        return view ('occurrence.create',compact('occurrence','officer'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {




        $officer = Officer::findOrFail($request->officer_id);
        $officer->occurrence()->create([
            'shift' => $request->shift,
            'ref' => $request->ref,
            'entry' => $request->entry,
            'date_time' => $request->date_time,
            'subject' => $request->subject,
            'occurrence' => $request->occurrence,
        ]);

        return redirect()->route('occurrence.index')->with('message','Occurrence created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Occurrence $occurrence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Occurrence $occurrence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Occurrence $occurrence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Occurrence $occurrence)
    {
        //
    }
}
