<?php


use App\Http\Controllers\StudentController;
use App\Http\Controllers\TrackController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home',function(){
//     echo "Ayaat";
// });
// Route::get('/users',function()
// {
//    $users=[
//     ["id"=>1,"name"=>"ayaat","age"=>24],
//     ["id"=>2,"name"=>"nada","age"=>27],
//     ["id"=>3,"name"=>"eman","age"=>25],
//    ];
// //    return $users;
// return view('usersData',["users"=>$users]);
// });
// /*** display user by id */
// Route::get('/users/{id}',function($id)
// {
//    $users=[
//     ["id"=>1,"name"=>"ayaat","age"=>24],
//     ["id"=>2,"name"=>"nada","age"=>27],
//     ["id"=>3,"name"=>"eman","age"=>25],
//    ];
// //    return $users;
// if($id<count($users))
// {
//     return $users[$id-1];
// }else{
//     return abort(404);
// }
// })->where('id','[0-9]+');

/*** Routes
 * get => get data
 * post=> store data
 * put=>edit data
 * delete=>delete data
 */



 /*** Logic controller
  * Create DB => run => DML ,DDL
  * Deal With DataBase => set Craditionals
  * DBNmae , userName , Password , host => .env  */


  Route::get('/students/{id}/create',[StudentController::class,'create'])->name('students.create');
  Route::get('/students',[StudentController::class,'index'])->name('students.index');
  Route::get('/students/{id}',[StudentController::class,'view'])->name('students.view');
Route::delete('/students/{id}',[StudentController::class,'destroy'])->name('students.destroy');
Route::post('/students/store',[StudentController::class,'store'])->name('students.store');

Route::get('/students/{id}/edit',[StudentController::class,'edit'])->name('students.edit');

Route::put('/students/{id}/update',[StudentController::class,'update'])->name('students.update');


Route::get('/tracks',[TrackController::class,'index'])->name('tracks.index');
