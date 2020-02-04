<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Events;
use App\City;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function events(){
        return view('events');
    }

    public function index(){
        $events= Events::join('cities', 'events.city_id','=','cities.id' )
        ->join('users', 'events.user_id','=','users.id' )
        ->select(
          'events.id',
          'events.name',
          'events.description',
          'events.city_id',
          'events.date',
          'events.time',
          'events.venue',
          'events.organized_by',
          'events.website',
          'events.contact_info',
          'users.user_name',
          'cities.city_name',
        ) ->orderBy('events.id', 'asc')->get();
        return view('admin.event.index',['events'=>$events]);
    }

    public function createView(Request $request){
        $cities =  City::all();
        return view('admin.event.create',['cities' => $cities]);
    }

    public function create(Request $request)
    { 
        $this->validate($request, [
            // 'contact_info' => 'required|regex:/(0)[0-9]{9}/',
        ]);
       
       $events = Events::create([
        'name' => $request['name'],
        'description' => $request['body'],
        'date' => date("Y-m-d H:i:s", strtotime(request('date'))),
        'time' => $request['time'],
        'venue' => $request['venue'],
        'organized_by' => $request['organizedby'],
        'website' => $request['website'],
        'contact_info' => $request['contactinfo'],
        'user_id' => auth()->id(),
        'city_id' => $request->input('select'),
       ]);
       return redirect()->back()->with('message','Event add successfully.. ' );
    }

    public function editView($id){
        $cities =  City::all();
        $events =  Events::where('id','=',$id)->get();
        return view('admin.event.edit',['events'=>$events],['cities'=>$cities]);
    }

    public function edit(Request $request, $id){

        $events = new Events();
        $events->where('id','=',$id)
              ->update([
                'name' => $request['name'],
                'description' => $request['body'],
                'date' => date("Y-m-d H:i:s", strtotime(request('date'))),
                'time' => $request['time'],
                'venue' => $request['venue'],
                'organized_by' => $request['organizedby'],
                'website' => $request['website'],
                'contact_info' => $request['contactinfo'],
                'user_id' => auth()->id(),
                'city_id' => $request->input('select'),
        ]);
        return redirect()->back()->with('message',' Event update successfully.. ' );
    }
    
    public function detailsView($id){
        $events= Events::join('cities', 'events.city_id','=','cities.id' )
        ->join('users', 'events.user_id','=','users.id' )
        ->select(
          'events.id',
          'events.name',
          'events.description',
          'events.date',
          'events.time',
          'events.venue',
          'events.organized_by',
          'events.website',
          'events.Contact_info',
          'cities.city_name',
          'users.user_name',
        )->where(['events.id' => $id])
        ->get();
        return view('admin.event.details',['events'=>$events]);
    }

    public function deleteView($id){
        $events= Events::join('cities', 'events.city_id','=','cities.id' )
        ->join('users', 'events.user_id','=','users.id' )
        ->select(
          'events.id',
          'events.name',
          'events.description',
          'events.date',
          'events.time',
          'events.venue',
          'events.organized_by',
          'events.website',
          'events.Contact_info',
          'cities.city_name',
          'users.user_name',
        )->where(['events.id' => $id])
        ->get();
        return view('admin.event.delete',['events'=>$events]);
    }

    public function delete($id){
        Events::where('id', $id)->delete();
        return redirect('admin/events')->with('message', 'Event delete succussfully..');
    }
    
}
