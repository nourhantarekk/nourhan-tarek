<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class messagecontroller extends Controller{
public function print(){
    return view('message');
}
}