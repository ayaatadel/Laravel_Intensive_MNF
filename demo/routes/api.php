<?php

use App\Http\Controllers\Api\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get
('/hiApi',function()
{
    return "Hi From Api";
});

// route resource
Route::apiResource('students',StudentController::class);

/*
 GET|HEAD        api/students . students.index › Api\StudentController@index
  POST            api/students . students.store › Api\StudentController@store
  GET|HEAD        api/students/{student} students.show › Api\StudentControll…
  PUT|PATCH       api/students/{student} students.update › Api\StudentContro…
  DELETE          api/students/{student} students.destroy › Api\StudentContr…
*/


