<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
{
    public function show(){
        return view('admin.register');
    }

    // public function register(Request $request){
    //     $validator = $request->validate([
    //         'name'     => 'required|min3',
    //         'email'    => 'required',
    //         'password' => 'required|min:6'
    //     ]);

    //     \App\Models\User::create($validator);

    //     return rederect('/login');
    // }

    public function register(RegistrationRequest $requestFields)  // injected Request class
    {
    
        // This will throw an error, since data passed to create method
        // must be an array, but $requestFileds contains an object.
        // We will fix it in next section
        // \App\User::create($requestFields);  
        \App\User::create([
            'user_name' => $requestFields['name'],
            'email' => $requestFields['email'],
            'password' => $requestFields['password'],
        ]);
        return redirect('/admin/dashboard');
    }
}
