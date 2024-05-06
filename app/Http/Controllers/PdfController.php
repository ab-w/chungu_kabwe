<?php

namespace App\Http\Controllers;

use App\Models\cr;
use App\Models\User;
use App\Models\Officer;
use Illuminate\Http\Rest;
use App\Models\Occurrence;
use App\Models\UserDataExport;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Exports\UsersDataExport;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\Exportable;

class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     */


     public function viewPDF(){
        $users =User::all();
        return view('occurrence.user', compact('occurrence'));
    }
    public function index()
    {

    $officer=Officer::all();
    $occurrence =Occurrence::all();
    $pdf = Pdf::loadView ('occurrence.user',['occurrences' => $occurrence, 'officers' => $officer]);
    return $pdf->stream();
    
    }
    public function downloadPDF(){
    $users=User::all();
    
    $pdf = Pdf::loadView('occurrence.user',array('users',$users))
    ->serPaper('a4', 'portrait');
    return $pdf->download('user.pdf');
    }
    public function exportExcel(){
        return Excel ::download(UsersDataExport::class);
    }

    }



    