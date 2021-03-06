<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\LoginRequest;



class LoginController extends Controller
{
   public function show(){
       return view('admin.login');
   }

//    public function authenticate(Request $request){
//        $validator = $request->validate([
//             'email'     => 'required',
//             'password'  => 'required|min:6' 
//        ]);

//        if(Auth::attemp($validator)){
//            return rederect()->route('admin.dashboard');
//        }
//    }

    public function authenticate(LoginRequest $requestFields){
        $attributes = $requestFields->only(['email','password']);
        
        if(Auth::attempt($attributes)){
            return redirect()->route('dashboard')->with('message','Login successfully.. ' );
        }
        else{
            return redirect()->route('login')->withErrors([
                'email' => 'These credentials do not match our records..',
            ]);
        }
    }

   public function logout(){
       Session::flush('message', 'good bye!');
       Auth::logout();
       return back();
   }
}
