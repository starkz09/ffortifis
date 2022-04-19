<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class network-complaince-securityController extends Controller
{
    public function index()
    {
        return view('Frontend.network-complaince-security');
    }
}
