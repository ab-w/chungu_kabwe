<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $department = Department::all();
        return view('department.index',compact('department'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $department = Department::all();
        return view('backends.departments.create',compact('department'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

        {
            // $request->validate([
            //     'name' => 'required',
            //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // ]);

            $cate = $request->all();

            // if ($image = $request->file('image')) {
            //     $destinationPath = 'images/category';
            //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            //     $image->move($destinationPath, $profileImage);
            //     $cate['image'] = "$profileImage";
            // }

            $cate = Department::firstOrCreate([
                'name' => $cate['name'],
            ]);
            // // $cate = new Department;
            // $cate->name = $request->name;

            // $cate->save();

            return redirect()->route('department.index')->with('message','Department created successfully.');
        }


    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department)
    {

        return view('backends.departments.edit',compact('department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Department $department)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $input = $request->all();



        $department->update($input);

        return redirect()->route('departments.index')->with('message','Department updated successfully');

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)

    {
        $department->delete();

        return redirect()->route('backends.departments.index')->with('message','Department deleted successfully');
    }

    // public function delete($id)

    // {
    //     $department = Department::find($id);
    //     $department->delete();

    //     return redirect()->route('backends.departments.index')->with('Message','Department deleted successfully');
    // }
}
