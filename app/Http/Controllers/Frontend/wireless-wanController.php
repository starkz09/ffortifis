<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class wireless-wanController extends Controller
{
    public function index()
    {
        return view('Frontend.wireless-wan');
    }
}
