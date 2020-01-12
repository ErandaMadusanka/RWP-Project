<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourPackagesController extends Controller
{
    public function index(){
        return view('tour_packages');
    }

    public function tourPackages(){
        return view('admin.tour_packages');
    }
}
