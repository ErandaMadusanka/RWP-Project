<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beaches;
use App\BeachActivity;

class BeachActivityController extends Controller
{
    public function index()
    {
        $beachActivity= BeachActivity::join('beaches', 'beach_activities.beach_id','=','beaches.id' )
        ->select(
          'beach_activities.id',
          'beach_activities.description',
          'beach_activities.date',
          'beach_activities.time',
          'beaches.name',
        )->get();
        return view('admin.beach.ba.index',['BActivity'=>$beachActivity]);
    }

   
    public function createView()
    {
        $beaches = Beaches::all();
        return view('admin.beach.ba.create',['beaches' => $beaches]);
    }
    public function create(Request $request)
    {
       $beachActivity = BeachActivity::create([
        'description' => $request['body'],
        'date' => date("Y-m-d H:i:s", strtotime(request('date'))),
        'time' => $request['time'],
        'beach_id' => $request->input('select'),
       ]);
       return redirect()->back()->with('message',' Beach activity add successfully.. ' );
    }
    
    public function detailsView($id)
    {
        $beachActivity= BeachActivity::join('beaches', 'beach_activities.beach_id','=','beaches.id' )
        ->select(
          'beach_activities.id',
          'beach_activities.description',
          'beach_activities.date',
          'beach_activities.time',
          'beach_activities.image',
          'beaches.name',
        )->where(['beach_activities.id' => $id])
         ->get();
        return view('admin.beach.ba.details',['BActivity'=>$beachActivity]);
    }

   
    public function editView($id)
    {
        $beaches = Beaches::all();
        $beachActivity= BeachActivity::join('beaches', 'beach_activities.beach_id','=','beaches.id' )
        ->select(
          'beach_activities.id',
          'beach_activities.description',
          'beach_activities.date',
          'beach_activities.time',
          'beach_activities.image',
          'beaches.name',
        )->where(['beach_activities.id' => $id])
         ->get();
        return view('admin.beach.ba.edit',['BActivity'=>$beachActivity],['beaches'=>$beaches]);
    }
    public function edit(Request $request , $id)
    {
        $beachActivity = new BeachActivity();
        $beachActivity->where('id','=',$id)
              ->update([
                'description' => $request['body'],
                'date' => date("Y-m-d H:i:s", strtotime(request('date'))),
                'time' => $request['time'],
                'beach_id' => $request->input('select'),
        ]);
        return redirect()->back()->with('message',' Beach update successfully.. ' );
        // $beachActivity = BeachActivity::update([
        //     'description' => $request['body'],
        //     'date' => date("Y-m-d H:i:s", strtotime(request('date'))),
        //     'time' => $request['time'],
        //     'beach_id' => $request->input('select'),
        //    ])->where('id','=',$id);
        //    return redirect()->back()->with('message',' Beach activity update successfully.. ' );
    }


    
    public function deleteView($id)
    {
        $beachActivity = BeachActivity::join('beaches', 'beach_activities.beach_id','=','beaches.id' )
        ->select(
          'beach_activities.id',
          'beach_activities.description',
          'beach_activities.date',
          'beach_activities.time',
          'beach_activities.image',
          'beaches.name',
        )->where(['beach_activities.id' => $id])
         ->get();
        return view('admin.beach.ba.delete',['BActivity'=>$beachActivity]);
    }
    public function delete($id){
        BeachActivity::where('id', $id)->delete();
        return redirect('admin/beach/ba')->with('message', 'Beach Activity delete succussfully..');
    }
}
