<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Foundation\Auth\User;
use App\User;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $admins = User::all();
        return view('admin.dashboard',['admins'=>$admins]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
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


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function revoke($id)
    {
        if(!empty($id)){
            $user = User::find($id);
            $user->unban();
        }
        return redirect()->back()
        				->with('message','User Revoke Successfully.');
    }
}
