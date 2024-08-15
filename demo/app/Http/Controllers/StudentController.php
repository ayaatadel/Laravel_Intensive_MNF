<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Track;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    //
    function index()
    {
        //* DB=> database
        // $students=DB::table('students')->get();

        /** Use Model Student  */
        $students=Student::all();
        // dump($students);
        // return view('studentsData',["students"=>$students]);
        return view('students.studentsData',compact("students"));
    }


    function view($id)
    {

        /** id */
    //   $student=Student::find($id);
      $student=Student::findOrFail($id);
      return view('students.studentData',compact("student"));
    }

    /****
     * Task
     *
     *
     * Apply that i do
     * delete user
     * create table tracks  => all data of =>Tracks , btn (view => single track data (back => tracks data),delete=> delete track data)
     *
     */


     function destroy($id)
     {
         $student=Student::findOrFail($id);
         $student->delete();
         return to_route('students.index');
     }

     function create()
     {
     $tracks=Track::all();

        return view('students.create',compact('tracks'));
     }

     function store()
     {
        // dump($_POST);
        $requestData=request()->all();
        // dd($requestData);
        // $student= new Student();
        // dump($student);
        // $student->name=$requestData['name'];
        // $student->email=$requestData['email'];
        // $student->gender=$requestData['gender'];
        // $student->grade=$requestData['grade'];
        // $student->address=$requestData['address'];
        // $student->image=$requestData['image'];
        $student=Student::create($requestData);
        $student->save();
        return to_route('students.view',$student->id);


     }
     /** edit  */
     function edit($id)
     {
        $student=Student::findOrFail($id);
        return view('students.update',compact("student"));
     }

     function update($id)
     {
        $student=Student::findOrFail($id);
        $updatedStudentData=request()->all();
        // dump($student,$updatedStudentData);
        $student->update($updatedStudentData);
        return to_route('students.index');
     }




}
