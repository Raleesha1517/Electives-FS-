<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\User;
use App\Models\Patients;
// use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        $user = User::all();
        $patient = Patients::all();
        $usersCount = Patients::count();
        $doctorsCount = Doctor::count();
        $adminsCount = User::where('usertype', 3)->count();
         return view('admin.dashboard', ['doctors' => $doctors, 'user' => $user, 'patient' => $patient,
         'usersCount' => $usersCount,
         'doctorsCount' => $doctorsCount,
         'adminsCount' => $adminsCount,]);
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
        $user->password = bcrypt($request->password); // Use bcrypt to hash the password
        $user->usertype = $request->usertype; // Assign the usertype value
        $user->save();

        \DB::statement('UPDATE users SET phn = 1045300 + (id - 1) * 13 WHERE id = ?', [$user->id]);
    
        // Create a new doctor record
        $doctor = new Doctor();
        $doctor->user_id = $user->id;
        $doctor->phone_number = $request->phone_number;
        $doctor->designation = $request->designation;
        $doctor->ward = $request->ward;
        $doctor->save();
    
    
        return redirect('/admin/dashboard')->with('success', 'Doctor added successfully.');
    }

    public function adminAdd()
    {
        return view('admin.addadmin');
    }

    public function adminPost(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        // Create a new user record for the admin
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->usertype = 3; // Admin user type
        $user->save();
        \DB::statement('UPDATE users SET phn = 1045300 + (id - 1) * 13 WHERE id = ?', [$user->id]);

        // Redirect back to dashboard with success message
        return redirect('/admin/dashboard')->with('success', 'Admin added successfully.');
    }

    public function deletePatient($id)
    {
        $patient = Patients::findOrFail($id);
        $patient->delete();
        
        return redirect('/admin/dashboard')->with('delete', 'Patient deleted successfully.');
    }

    public function deleteDoctor($id)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->delete();
        
        return redirect('/admin/dashboard')->with('delete', 'Doctor deleted successfully.');
    }

    public function deleteAdmin($id)
    {
        $admin = User::findOrFail($id);
        $admin->delete();
        
        return redirect('/admin/dashboard')->with('delete', 'Admin deleted successfully.');
    }
}
