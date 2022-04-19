<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class trailController extends Controller
{
    public function index()
    {
        return view('Frontend.trail');
    }
}
