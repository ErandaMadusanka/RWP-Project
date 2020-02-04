<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Activities;
use App\City;


use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    public function index(){
        $activities= Activities::join('cities', 'activities.city_id','=','cities.id' )
        ->join('users', 'activities.user_id','=','users.id' )
        ->select(
          'activities.id',
          'activities.activity_name',
          'activities.description',
          'activities.date',
          'activities.time',
          'activities.duration',
          'activities.important_info',
          'activities.guid_info',
          'users.user_name',
          'cities.city_name',
        ) ->orderBy('activities.id', 'asc')->get();
        return view('admin.activity.index',['activities'=>$activities]);
    }

    public function activities(){
        return view('activities');
    }

    public function createView(){
        $cities = City::all();
        return view('admin.activity.create',['cities' => $cities]);
    }

    public function create(Request $request){
        $events = Activities::create([
            'activity_name' => $request['name'],
            'description' => $request['body'],
            'date' => date("Y-m-d H:i:s", strtotime(request('date'))),
            'time' => $request['time'],
            'duration' => $request['duration'],
            'important_info' => $request['importantinfo'],
            'guid_info' => $request['guidinfo'],
            'user_id' => auth()->id(),
            'city_id' => $request->input('select'),
           ]);
        return redirect()->back()->with('message','Activity Add Successfully..');
    }

    public function editView($id){
        $cities =  City::all();
        $activities =  Activities::where('id','=',$id)->get();
        return view('admin.activity.edit',['activities'=>$activities],['cities'=>$cities]);
    }

    public function edit(Request $request ,$id){
        $activity = new Activities();
        $activity->where('id','=',$id)
              ->update([
                'activity_name' => $request['name'],
                'description' => $request['body'],
                'date' => date("Y-m-d H:i:s", strtotime(request('date'))),
                'time' => $request['time'],
                'duration' => $request['duration'],
                'important_info' => $request['importantinfo'],
                'guid_info' => $request['guidinfo'],
                'user_id' => auth()->id(),
                'city_id' => $request->input('select'),
        ]);
        return redirect()->back()->with('message',' Activity update successfully.. ' );
    }

    public function detailsView($id){
        $activities= Activities::join('cities', 'activities.city_id','=','cities.id' )
        ->join('users', 'activities.user_id','=','users.id' )
        ->select(
          'activities.id',
          'activities.activity_name',
          'activities.description',
          'activities.date',
          'activities.time',
          'activities.duration',
          'activities.important_info',
          'activities.guid_info',
          'users.user_name',
          'cities.city_name',
        ) ->where(['activities.id' => $id])->get();
        return view('admin.activity.details',['activities'=>$activities]);
    }

    public function deleteView($id){
        $activities= Activities::join('cities', 'activities.city_id','=','cities.id' )
        ->join('users', 'activities.user_id','=','users.id' )
        ->select(
          'activities.id',
          'activities.activity_name',
          'activities.description',
          'activities.date',
          'activities.time',
          'activities.duration',
          'activities.important_info',
          'activities.guid_info',
          'users.user_name',
          'cities.city_name',
        ) ->where(['activities.id' => $id])->get();
        return view('admin.activity.delete',['activities'=>$activities]);
    }
    public function delete($id){
        Activities::where('id', $id)->delete();
        return redirect('admin/activities')->with('message', 'Activity delete succussfully..');
    }
}
