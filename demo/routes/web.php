<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',function(){
    echo "Ayaat";
});
Route::get('/users',function()
{
   $users=[
    ["id"=>1,"name"=>"ayaat","age"=>24],
    ["id"=>2,"name"=>"nada","age"=>27],
    ["id"=>3,"name"=>"eman","age"=>25],
   ];
//    return $users;
return view('usersData',["users"=>$users]);
});
/*** display user by id */
Route::get('/users/{id}',function($id)
{
   $users=[
    ["id"=>1,"name"=>"ayaat","age"=>24],
    ["id"=>2,"name"=>"nada","age"=>27],
    ["id"=>3,"name"=>"eman","age"=>25],
   ];
//    return $users;
if($id<count($users))
{
    return $users[$id-1];
}else{
    return abort(404);
}
})->where('id','[0-9]+');

/*** Routes
 * get => get data
 * post=> store data
 * put=>edit data
 * delete=>delete data
 */
