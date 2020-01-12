<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeachesController extends Controller
{
    public function index(){
        return view('beaches');
    }

    public function beaches(){
        return view('admin.beaches');
    }
}
