<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class network-securityController extends Controller
{
    public function index()
    {
        return view('Frontend.network-security');
    }
}
