<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Officer;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        // $request->validate([
        //     'name' => 'required',
        //     'detail' => 'required',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

        // $category = Category::findOrFail($request->category_id);
        // $product = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/employee';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $department['image'] = "$profileImage";
        }

        if ($cv_file = $request->file('cv_file')) {
            $destinationPath = 'images/documents';
            $profileFile = date('YmdHis') . "." . $cv_file->getClientOriginalExtension();
            $cv_file->move($destinationPath, $profileFile);
            $department['cv_file'] = "$profileFile";
        }

        // $product = new Product;
        // $product->name = $request->name;
        // $product->detail = $request->detail;
        // $product->image = $profileImage;
        // $product->save();

        $department = Officer::findOrFail($request->department_id);
        $department->employee()->create([
            'fname' => $request->fname,
            'sname' => $request->sname,
            'email' => $request->email,
            'position' => $request->position,
            'birthday' => $request->birthday,
            'country_id' => $request->country_id,
            'address' => $request->address,
            'napsa_no' => $request->napsa_no,
            'next_of_kin_relationship' => $request->next_of_kin_relationship,
            'next_of_kin_number' => $request->next_of_kin_number,
            'education_file' => $request->education_file,
            'nrc_file' => $request->nrc_file,
            'gender' => $request->gender,
            'passport_no' => $request->passport_no,
            'religion' => $request->religion,
            'marital_status' => $request->marital_status,
            'no_of_childrens' => $request->no_of_childrens,
            'company_health_no' => $request->company_health_no,
            'phone_number' => $request->phone_number,
            'next_of_kin_name' => $request->next_of_kin_name,
            'bank_name' => $request->bank_name,
            'joining_date'=> $request->joining_date,
            'bank_account' => $request->bank_account,
            'account_names' => $request->account_names,
            'image' =>  $profileImage,
            'cv_file' =>  $profileFile,

        ]);

        return redirect()->route('employee.index')->with('message','Employee created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
