<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beaches;

class BeachesController extends Controller
{
    public function index(){

        $beach =  \App\Models\Beaches::all();
        return view('admin.beach.index',['beach'=>$beach]);

        // return view('admin.beach.index');
    }
    public function createView(Request $request){
        
        return view('admin.beach.create');
    }
    public function create(Request $request){
        
        $this->validate($request, [
            'name' =>'required|min:3'
        ]);
        
        $beach = new Beaches();
        $beach->create([
            'name' => $request['name'],
            'description' => $request['body'],
            'latitude' => $request['latitude'],
            'longitude' => $request['longitude'],
            'image' => $request['image']
        ]);
        return redirect()->back()->with('message',' Beach add successfully.. ' );
    }

    public function editView($id){
        $beach =  \App\Models\Beaches::where('id','=',$id)->get();
        return view('admin.beach.edit',['beach'=>$beach]);
    }

    public function edit(Request $request, $id){
        
        $beach = new Beaches();
        $beach->where('id','=',$id)
              ->update([
                'name' => $request['name'],
                'description' => $request['body'],
                'latitude' => $request['latitude'],
                'longitude' => $request['longitude'],
                'image' => $request['image']
        ]);
        return redirect()->back()->with('message',' Beach update successfully.. ' );
    }

    public function detailsView($id){
        $beach =  \App\Models\Beaches::where('id','=',$id)->get();
        return view('admin.beach.details',['beach'=>$beach]);
    }
    public function deleteView($id){
        $beach =  \App\Models\Beaches::where('id','=',$id)->get();
        return view('admin.beach.delete',['beach'=>$beach]);
    }
    public function delete($id){
        \App\Models\Beaches::where('id', $id)->delete();
        return redirect('admin/beach')->with('message', 'Beach delete succussfully..');
    }
    
}
