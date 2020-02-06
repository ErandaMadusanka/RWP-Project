<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $admins = User::all();
        return view('admin.dashboard.index',['admins'=>$admins]);
    }

    public function createView(){
        return view('admin.dashboard.create');
    }

    
    public function ban(Request $request)
    {
        $input = $request->all();
        if(!empty($input['id'])){
            $user = User::find($input['id']);
            $user->bans()->create([
			    'expired_at' => '+1 month',
			    'comment'=>$request->baninfo
			]);
        }
        return redirect()->back()->with('message','Ban Successfully..');
    }


   
    public function revoke($id)
    {
        if(!empty($id)){
            $user = User::find($id);
            $user->unban();
        }
        return redirect()->back()
        				->with('message','User Revoke Successfully.');
    }

    public function deleteView($id){

        $user = User::where('id', $id)->get();
        return view('admin.dashboard.delete',['user'=>$user]);
    }

    public function delete($id){
        User::where('id', $id)->delete();
        return redirect('admin/dashboard')->with('message', 'User delete succussfully..');
    }
}
