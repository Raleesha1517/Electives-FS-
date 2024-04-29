<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    public function index1()
    {
        return view('doctors.dashboard');
    }
    public function index2()
    {
        return view('users.dashboard');
    }
    
}
