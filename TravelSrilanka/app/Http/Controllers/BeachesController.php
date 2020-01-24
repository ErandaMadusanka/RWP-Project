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

    // public function createReport(Request $request)
    // {
    //     $this->validate($request, [
    //         'body' =>'required|min:1'
    //     ]);
    //     $report = new SocietyReport();
    //     $report->body = $request['body'];
    //     $message = 'There was an error';
    //     if($request->user()->reports()->save($report))
    //     {
    //         $message = 'Post successfully created!';
    //     }
    //     return redirect()->route('admin.home')->with(['message' =>$message]);
    // }

}
