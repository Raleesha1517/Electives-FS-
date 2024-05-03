<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patients;
use App\Models\User;
// use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    public function index()
    {
        $patients = Patients::all();
        $user = User::all();
        return view('doctors.dashboard',['patients' => $patients, 'user' => $user]);
    }

    public function viewpatient()
    {
        $patients = Patients::all();
        $user = User::all();
         return view('doctors.patient', ['patients' => $patients, 'user' => $user]);
    }

    public function addpatient(Request $request)
    {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->usertype = $request->usertype; // Use bcrypt to hash the password
            $user->save();
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string',
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

        // Create a new patient record
        $patients = Patients::create($validatedData);

        // Redirect to a success page or back to the form with a success message
        return redirect('/patients')->with('success', 'Patient created successfully.');
    }

    public function index1()
    {
        return view('doctors.patient');
    }




    
}
