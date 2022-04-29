<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\usercontroller;
use App\Http\Controllers\messagecontroller;
// use App\Http\Controllers\usercontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('message/print',[messagecontroller::class,'print']) ;
Route::get('users/get',[usercontroller::class,'index']) ;
Route::get('users/all',[usercontroller::class,'show']) ;
