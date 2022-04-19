<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class quantum-safe-certificateController extends Controller
{
    public function index()
    {
        return view('Frontend.quantum-safe-certificate');
    }
}
