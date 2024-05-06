<?php

namespace App\Http\Controllers;

use App\Models\cr;
use App\Models\User;
use App\Models\Officer;
use Illuminate\Http\Rest;
use App\Models\Occurrence;
use Illuminate\Http\Request;
use App\Models\UserDataExport;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Exports\UsersDataExport;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\Exportable;
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
    public function viewPdf()
    {
  
    $occurrence=Occurrence::all();
    $pdf = Pdf::loadView('occurrence.user',array('occurrence'))
    ->setPaper('a4', 'portrait');
    return $pdf->stream();
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
public function export_user_pdf(){
  

    $pdf = Pdf::loadView('occurrence.user');
    return $pdf->download('user.pdf');
    
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
