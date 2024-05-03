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
            'phone_number' => 'required|string',
            'designation' => 'required|string',
            'ward' => 'required|string',
        ]);

        // Create a new user record for the doctor
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->usertype = $request->usertype; // Use bcrypt to hash the password
        $user->save();

        // Create a new doctor record
        $doctor = new Doctor();
        $doctor->user_id = $user->id;
        $doctor->phone_number = $request->phone_number;
        $doctor->designation = $request->designation;
        $doctor->ward = $request->ward;
        $doctor->save();

        return redirect('/admin/dashboard')->with('success', 'Doctor added successfully.');
    }
}
