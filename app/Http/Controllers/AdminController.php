<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\User;
// use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function doctorsAdd()
    {
        $doctors = Doctor::all();
        $user = User::all();
         return view('admin.adddoctor', ['doctors' => $doctors, 'user' => $user]);
    }

    public function DoctorsPost(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'date_of_birth' => 'required|date',
            'age' => 'nullable|integer',
            'gender' => 'required|string',
            'address' => 'nullable|string',
            'blood_group' => 'nullable|string',
            'home_telephone' => 'nullable|string',
            'mobile_number' => 'nullable|string',
            'guardian_name' => 'nullable|string',
            'guardian_relationship' => 'nullable|string',
            'guardian_nic' => 'nullable|string',
            'medications' => 'nullable|string',
            'remarks' => 'nullable|string',
        ]);
    
        // Create a new user record
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->usertype = $request->usertype; // Assuming 'usertype' is a field in the 'users' table
        $user->save();
    
        // Create a new patient record
        $patient = new Patient();
        $patient->fill($validatedData);
        $patient->user_id = $user->id;
        $patient->save();
    
        return redirect('/admin/dashboard')->with('success', 'Patient added successfully.');
    }
}
