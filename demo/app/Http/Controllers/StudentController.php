<?php

namespace App\Http\Controllers;

use App\Models\Student;
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
        return view('studentsData',compact("students"));
    }


    function view($id)
    {
      $student=Student::find($id);
      return view('studentData',compact("student"));
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
}
