<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class mobiledevicemanagement extends Controller
{
    public function index()
    {
        return view('frontend.mobile-device-management');
    }
}
