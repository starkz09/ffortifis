<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class policy-draftingController extends Controller
{
    public function index()
    {
        return view('Frontend.policy-drafting');
    }
}
