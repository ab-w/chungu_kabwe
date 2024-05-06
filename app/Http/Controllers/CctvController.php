<?php

namespace App\Http\Controllers;

use App\Models\Cctv;
use App\Models\Department;
use Illuminate\Http\Request;

class CctvController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cctv = Cctv::all();
        $department=Department::all();
        return view('cctv.index',compact('cctv','department'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cctv = Cctv::all();
        return view('cctv.create',compact('cctv'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)


        {

            $department = Department::findOrFail($request->department_id);
            $department->cctv()->create([
                'cctv' => $request->cctv,
                'biometric' => $request->biometric,
                'working_well' => $request->working_well,
                'faulty' => $request->faulty,
                'date_installed' => $request->date_installed,
                'last_maintenance' => $request->last_maintenance,
            ]);

            return redirect()->route('cctv.index')->with('message','Occurrence created successfully.');
        }



    /**
     * Display the specified resource.
     */
    public function show(Cctv $cctv)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cctv $cctv)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cctv $cctv)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cctv $cctv)
    {
        //
    }
}
