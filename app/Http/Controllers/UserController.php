<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Seizure_records;
use App\Models\Patients;
use App\Models\Doctor;

class UserController extends Controller
{
    public function index()
{
    $user = Auth::user();

    // Get the patient record associated with the authenticated user
    $patient = $user->patient;

    if ($patient) {
        // Get the seizure records associated with the patient
        $seizureRecords = Seizure_records::where('patient_id', $patient->id)->get();
    } else {
        // Handle the case where the user is not associated with a patient
        $seizureRecords = []; // Or any other default value or handling
    }

    $phn = $user->phn;

    return view('users.dashboard', compact('seizureRecords', 'phn'));
}


    public function createRecord()
    {
        // Get the currently authenticated user
        $user = Auth::user();

        // Get the patient record associated with the authenticated user
        $patient = $user->patient;

        return view('users.seizure', compact('patient'));
    }

    public function postRecord(Request $request)
{
    // Check if the user is authenticated
    if (!Auth::check()) {
        // If not authenticated, redirect to login page or handle the case accordingly
        return redirect()->route('login')->with('error', 'You are not logged in.');
    }

    // Validate the incoming request data
    $validatedData = $request->validate([
        'date' => 'required|date',
        'time' => 'required',
        'temperature' => 'nullable|numeric',
        'fever' => 'nullable|string',
        'duration' => 'required|string',
        'episode_number' => 'required|integer',
        'description' => 'required|string',
    ]);

    // Get the currently authenticated user
    $user = Auth::user();

    // Check if the authenticated user is associated with a patient
    if ($user && $user->patient) {
        // Get the patient ID of the currently logged-in patient
        $patientId = $user->patient->id;

        // Add the patient ID to the validated data
        $validatedData['patient_id'] = $patientId;

        // Create a new seizure record with the validated data
        Seizure_records::create($validatedData);

        // Redirect back to the dashboard with a success message
        return redirect()->route('users.dashboard')->with('success', 'Seizure record added successfully.');
    } else {
        // Handle the case where the authenticated user is not associated with a patient
        return redirect()->route('users.dashboard')->with('error', 'You are not associated with a patient.');
    }
}


    public function show($id)
    {
        // Fetch the seizure record by ID
        $seizureRecord = Seizure_records::findOrFail($id);

        // Pass the seizure record data to the view
        return view('users.record', ['seizureRecord' => $seizureRecord]);
    }

    public function deleteRecord($id)
    {
        $seizureRecord = Seizure_records::findOrFail($id);
        $seizureRecord->delete();
        
        return redirect('/users/dashboard')->with('delete', 'Record deleted successfully.');
    }
}
