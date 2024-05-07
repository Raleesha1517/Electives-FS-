<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patients;
use App\Models\User;
use App\Models\Doctor;
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
        dd($request->all());
        
        $validatedData = $request->validate([
            'user_name' => 'required|string',
            'user_email' => 'required|email|unique:users,email',
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
        $user->name = $request->user_name;
        $user->email = $request->user_email;
        $user->usertype = $request->user_type;
        $user->save();

        // Create a new patient record
        $patient = new Patient();
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
        
        return redirect('/doctors/dashboard')->with('delete', 'Record deleted successfully.');
    }

    // public function view()
    // {
    //     return view('doctors.viewpatient');
    // }
    
}
