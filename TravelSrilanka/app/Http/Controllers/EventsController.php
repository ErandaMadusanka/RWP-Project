<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index(){
        return view('events');
    }

    public function events(){
        return view('admin.events');
    }
}
