<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Beaches;
use App\City;
// use Auth;


class BeachesController extends Controller
{
    public function beaches(){
        return view('beaches');
    }
    
    public function index(){

        // ->groupBy('society_reports.id')
        // ->orderBy('society_reports.id', 'DESC')

        $beach= Beaches::join('cities', 'beaches.city_id','=','cities.id' )
        ->join('users', 'beaches.user_id','=','users.id' )
        ->select(
          'beaches.id',
          'beaches.name',
          'beaches.description',
          'beaches.city_id',
          'beaches.latitude',
          'beaches.longitude',
          'cities.city_name',
          'users.user_name',
        ) ->orderBy('beaches.id', 'asc')->get();
        return view('admin.beach.index',['beach'=>$beach]);

    }
    public function createView(Request $request){
        $cities =  City::all();
        return view('admin.beach.create',['cities'=>$cities]);
    }
    public function create(Request $request){
        
        // $this->validate($request, [
        //     'name' =>'required|min:3'
        // ]);
        $beach = new Beaches();
        $beach->create([
            'name' => $request['name'],
            'description' => $request['body'],
            'latitude' => $request['latitude'],
            'longitude' => $request['longitude'],
            'image' => '',
            'user_id' => auth()->id(),
            'city_id' => $request->input('select'),
        ]);
        return redirect()->back()->with('message',' Beach add successfully.. ' );
    }

    public function editView($id){
        $cities  =  City::all();
        $beaches =  Beaches::where('id','=',$id)->get();
        return view('admin.beach.edit',['beaches'=>$beaches],['cities'=>$cities]);
        
        // return view('admin.beach.edit',['beach'=>$beach]);
    }

    public function edit(Request $request, $id){
        
        $beach = new Beaches();
        $beach->where('id','=',$id)
              ->update([
                'name' => $request['name'],
                'description' => $request['body'],
                'latitude' => $request['latitude'],
                'longitude' => $request['longitude'],
                'image' => $request['image'],
                'user_id' => auth()->id(),
                'city_id' => $request->input('select'),
        ]);
        return redirect()->back()->with('message',' Beach update successfully.. ' );
    }

    public function detailsView($id){
        $beach= Beaches::join('cities', 'beaches.city_id','=','cities.id' )
        ->join('users', 'beaches.user_id','=','users.id' )
        ->select(
          'beaches.id',
          'beaches.name',
          'beaches.description',
          'beaches.city_id',
          'beaches.latitude',
          'beaches.longitude',
          'cities.city_name',
          'users.user_name',
        )->where(['beaches.id' => $id])
        ->get();
        return view('admin.beach.details',['beach'=>$beach]);
    }
    public function deleteView($id){
        $beach= Beaches::join('cities', 'beaches.city_id','=','cities.id' )
        ->join('users', 'beaches.user_id','=','users.id' )
        ->select(
          'beaches.id',
          'beaches.name',
          'beaches.description',
          'beaches.city_id',
          'beaches.latitude',
          'beaches.longitude',
          'cities.city_name',
          'users.user_name',
        )->where(['beaches.id' => $id])
        ->get();
        return view('admin.beach.delete',['beach'=>$beach]);
    }
    public function delete($id){
        Beaches::where('id', $id)->delete();
        return redirect('admin/beach')->with('message', 'Beach delete succussfully..');
    }
    
}
