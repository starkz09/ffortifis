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
class loginHarsh extends Controller
{
    public function index()
    {

        return view('frontend.login_harsh');
    }
}
