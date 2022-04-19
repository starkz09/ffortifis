<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dataforensicsrecovery extends Controller
{
    public function index()
    {
        return view('frontend.data-forensics-recovery');
    }
}
