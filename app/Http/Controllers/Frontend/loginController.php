<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Str;
use DB;
use Mail;
class loginController extends Controller
{
    public function index()
    {
        return view('Frontend.login');
    }
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'         => 'required|email',
            'password'      => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        print_r($request->all());
        $remember_me = $request->has('remember') ? 1 : 0; 

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password],$remember_me)) {
           
            return redirect('home');
            

               
           
        }
        $message = array("success" => "Invalid email or password!!!");
        return redirect()->back()->with($message);
    }
    public function forgotPassword()
    {
        return view('Frontend.forgotPassword');
    }
    public function passwordResetLink(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,

        ]);

        Mail::send('Frontend.forgot', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Reset Password');
        });
        $message = array("success" => "We have e-mailed your password reset link!");
        return redirect()->back()->with($message);
    }

    public function showResetPasswordForm($token = null)
    {
        if ($token) {
            $resetPwd = DB::table('password_resets')->where('token', $token)->first();
            if ($resetPwd) {
                $email = $resetPwd->email;
            }
        }
        return view('Frontend.reset-password', compact('email'));
    }

    public function changePassword(Request $request)
    {


        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
            'confirm_password' => 'same:password',
        ]);
        $user = User::where('email', $request->email)
            ->update(['password' => bcrypt($request->password)]);

        if ($user == true) {
            $message = array(['success' => 'Your password has been changed!']);
            return redirect('/login')->with($message);
        } else {
            $message = array("success" => "Your password does not changes");
            return redirect()->back()->with($message);
        }
    }
    public function logout()
    {


        Auth::logout();

        return redirect('/');
    }
}
