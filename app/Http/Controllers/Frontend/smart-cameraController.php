<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class smart-cameraController extends Controller
{
    public function index()
    {
        return view('Frontend.smart-camera');
    }
}
