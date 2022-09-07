<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class resume extends Controller
{
    public function index()
    {
        return view('resume');
    }
}
