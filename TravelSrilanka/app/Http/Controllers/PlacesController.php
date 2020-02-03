<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Places;
use App\City;

use Illuminate\Http\Request;

class PlacesController extends Controller
{
    public function places(){
        return view('places');
    }

    public function index(){
        $places= Places::join('cities', 'places.city_id','=','cities.id' )
        ->join('users', 'places.user_id','=','users.id' )
        ->select(
          'places.id',
          'places.name',
          'places.description',
          'places.city_id',
          'places.latitude',
          'places.longitude',
          'cities.city_name',
          'users.user_name',
        ) ->orderBy('places.id', 'asc')->get();
        return view('admin.place.index',['places'=>$places]);
       
    }

    public function createView(Request $request){
        $cities =  City::all();
        return view('admin.place.create',['cities'=>$cities]);
    }

    public function create(Request $request){
        $beach = new Places();
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
        $places =  Places::where('id','=',$id)->get();
        return view('admin.place.edit',['places'=>$places],['cities'=>$cities]);
    }

    public function edit(Request $request, $id){
        $beach = new Places();
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
        $places= Places::join('cities', 'places.city_id','=','cities.id' )
        ->join('users', 'places.user_id','=','users.id' )
        ->select(
          'places.id',
          'places.name',
          'places.description',
          'places.city_id',
          'places.latitude',
          'places.longitude',
          'cities.city_name',
          'users.user_name',
        )->where(['places.id' => $id])
        ->get();
        return view('admin.place.details',['places'=>$places]);
    }

    public function delete($id){
        Places::where('id', $id)->delete();
        return redirect('admin/places')->with('message', 'Beach delete succussfully..');
    }

    public function deleteView($id){
        $places= Places::join('cities', 'places.city_id','=','cities.id' )
        ->join('users', 'places.user_id','=','users.id' )
        ->select(
          'places.id',
          'places.name',
          'places.description',
          'places.city_id',
          'places.latitude',
          'places.longitude',
          'cities.city_name',
          'users.user_name',
        )->where(['places.id' => $id])
        ->get();
        return view('admin.place.delete',['places'=>$places]);
    }
    
}
