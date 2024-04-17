<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }
    public function register(request $req){
        // return view('register');
     $data=$req->input('name');
      $req->session()->put('name',$data);
      echo session('name');
  
    }
  
}
