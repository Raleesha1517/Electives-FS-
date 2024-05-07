<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\LocaleController;
use Illuminate\Support\Facades\App;

class AwarenessController extends Controller
{
    public function index()
    {
        return view('awareness');
    }
}
