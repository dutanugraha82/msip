<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeCT extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function services()
    {
        return view('services');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
