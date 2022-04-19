<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\User;
class SignupController extends Controller
{
    public function signup()
    {
        return view('frontend.signup');
    }
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'contact' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $input_array = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'contact' => $request->contact,
        ];

        $user = User::create($input_array);



        if ($user == true) {
           


            $message = array("success" => "User registered successfully!!");
            return redirect()->back()->with($message);
        } else {
            $message = array("errors" => "Problem in registering User. !!");
            return redirect()->back()->with($message);
        }
    }


    
    
}
