<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NationalParkController extends Controller
{
    public function index(){

        return view('national_parks');
    }
}
