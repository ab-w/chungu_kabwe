<?php

namespace App\Http\Controllers;

use App\Models\Statementpad;
use Illuminate\Http\Request;

class StatementpadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $statementpad = Statementpad::all();
        return view('statementpad.index',compact('statementpad'));
  
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
        $statementpad = $request->all();


            $statementpad = Statementpad::firstOrCreate([
                'page_number' => $statementpad['page_number'],
                'full_name' => $statementpad['full_name'],
                'residential_address' => $statementpad['residential_address'],
                'business_address' => $statementpad['business_address'],
                'occupation' => $statementpad['occupation'],
                'village' => $statementpad['village'],
                'identity_card' => $statementpad['identity_card'],
                'chief' => $statementpad['chief'],
                'district' => $statementpad['district'],
                'nationality' => $statementpad['nationality'],
                'sex' => $statementpad['sex'],
                'age' => $statementpad['age'],
                'date' => $statementpad['date'],
                'issued_at' => $statementpad['issued_at'],
            ]);
            
          

       
            return view('statementpad.table'); 
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}


