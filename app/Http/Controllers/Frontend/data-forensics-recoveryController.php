<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class data-forensics-recoveryController extends Controller
{
    public function index()
    {
        return view('Frontend.data-forensics-recovery');
    }
}
