<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // 
        $students =Student::all();
        return $students;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // return $request;

        // task handle validation => Validator =>search
// $std_validator=Validator::make($request->all(),
// [
// 'name'=>'required',

// ]);

        $requestData=Request()->all();
        $student=Student::create($requestData);
        $student->save();
        return $student;
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
        return $student;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //

        $requestData=request()->all();
        $student=Student::create($requestData);
        $student->update($requestData);
        return $student;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
        $student->delete();
        return "student deleted successfully";
    }
}
