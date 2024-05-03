<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patients;

class DoctorController extends Controller
{
    public function index()
    {
        $patients = Patients::all();
        return view('doctors.dashboard',compact('patients'));
    }

    public function index1()
    {
        return view('doctors.patient');
    }




    
}
