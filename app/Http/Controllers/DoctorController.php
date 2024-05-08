<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patients;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Seizure_records;
// use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    public function index()
    {
        $doctor = Auth::user()->doctor;
        $patients = $doctor ? $doctor->patients : collect(); // Retrieve patients if doctor exists, otherwise empty collection
        $patientsCount = $patients->count(); // Count of patients

        return view('doctors.dashboard', compact('patients', 'patientsCount'));
    }


    public function viewpatient()
    {
        $patients = Patients::all();
        $user = User::all();
        $doctors = Doctor::all();
         return view('doctors.patient', ['patients' => $patients, 'user' => $user, 'doctors' => $doctors]);
    }

    public function viewPatientDetails($id)
        {
            $patient = Patients::findOrFail($id);
            $user = $patient->user;
            $seizureRecords = $patient->seizureRecords; // Retrieve seizure records for the patient
            return view('doctors.viewpatient', compact('patient', 'user', 'seizureRecords'));
        }


    public function addpatient(Request $request)
    {
        try {
        
        $validatedData = $request->validate([
            'username' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'user_type' => 'required|string',
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

        $doctor = Auth::user()->doctor;

        // Create a new user record
        $user = new User();
        $user->name = $request->username; // Change to 'username'
        $user->email = $request->email; // Change to 'email'
        $user->usertype = $request->user_type;
        $user->password = bcrypt($request->password);
        $user->save();
        \DB::statement('UPDATE users SET phn = 1045300 + (id - 1) * 13 WHERE id = ?', [$user->id]);

        // Create a new patient record
        $patient = new Patients();
        $patient->doctor_id = $doctor->id;
        $patient->user_id = $user->id;
        $patient->name = $request->name;
        $patient->date_of_birth = $request->date_of_birth;
        $patient->age = $request->age;
        $patient->gender = $request->gender;
        $patient->address = $request->address;
        $patient->blood_group = $request->blood_group;
        $patient->home_telephone = $request->home_telephone;
        $patient->mobile_number = $request->mobile_number;
        $patient->guardian_name = $request->guardian_name;
        $patient->guardian_relationship = $request->guardian_relationship;
        $patient->guardian_nic = $request->guardian_nic;
        $patient->medications = $request->medications;
        $patient->remarks = $request->remarks;
        $patient->save();

        return redirect('/doctors/dashboard')->with('success', 'Patient added successfully.');
    }
catch (\Exception $e) {
    // Log or display the error
    dd($e->getMessage());
    // Optionally, redirect back with an error message
    return redirect()->back()->with('error', 'Failed to add patient: ' . $e->getMessage());
}
    }

    public function deleteRecord($id)
    {
        $seizureRecord = Seizure_records::findOrFail($id);
        $seizureRecord->delete();
        
        return redirect('/doctors/dashboard')->with('delete', 'Record deleted successfully.');
    }

    public function deletePatient($id)
    {
        $patients = Patients::findOrFail($id);
        $patients->delete();
        
        return redirect('/doctors/dashboard')->with('delete', 'patient deleted successfully.');
    }

    // public function view()
    // {
    //     return view('doctors.viewpatient');
    // }

    public function createRecord($patientId)
    {
        $patient = Patients::findOrFail($patientId);
        return view('doctors.seizure', compact('patient'));
    }

public function postRecord(Request $request)
{
    try {
    // Validate the incoming request data
    $validatedData = $request->validate([
        'date' => 'required|date',
        'time' => 'required',
        'temperature' => 'nullable|numeric',
        'fever' => 'nullable|string',
        'duration' => 'required|string',
        'episode_number' => 'required|integer',
        'description' => 'required|string',
        'patient_id' => 'required|exists:patients,id', // Ensure patient_id exists in patients table
    ]);

    // Create a new seizure record with the validated data
    Seizure_records::create($validatedData);

    // Redirect back to the patient details page with a success message
    return redirect()->route('doctors.viewPatientDetails', ['id' => $validatedData['patient_id']])
                     ->with('success', 'Seizure record added successfully.');
}
catch (\Exception $e) {
    // Log or display the error
    dd($e->getMessage());
    // Optionally, redirect back with an error message
    return redirect()->back()->with('error', 'Failed to add patient: ' . $e->getMessage());
}
    
}
}