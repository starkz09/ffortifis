<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class iot-security-complainceController extends Controller
{
    public function index()
    {
        return view('Frontend.iot-security-complaince');
    }
}
