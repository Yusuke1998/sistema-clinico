<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function website()
    {
        return view('website');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
