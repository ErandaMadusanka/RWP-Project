<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function singin(){
        return view('admin.singin');
    }

    public function index(){
        return view('admin.home');
    }

    
   
   
   
    

}
