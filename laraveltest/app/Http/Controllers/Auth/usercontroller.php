<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class usercontroller extends Controller
{
    public function index(){
        return view('user.show');
    }
    public function show(){
       $users= User::all();
       //print_r($users);
       return view('user.all',['databaseusers'=>$users]);
    }
}
