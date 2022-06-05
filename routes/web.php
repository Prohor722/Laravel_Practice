<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('index');
});





//testing routes

//Route:: get('/test/{name}', function($name){
//    return view('test',['name'=>$name]);
//});
//
//Route:: get('/user/{id}', [UserController::class,'show']);
//
////Route::view('/users','users');
//
//Route::get('/users/{user}', [UsersController::class, 'loadView']);
