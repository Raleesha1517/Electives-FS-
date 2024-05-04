<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Seizure_records;
use App\Models\Patient;
use App\Models\Doctor;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();

    // Get the patient record associated with the authenticated user
        $patient = $user->patient;

        // Get the seizure records associated with the patient
        $seizureRecords = Seizure_records::where('patient_id', $patient->id)->get();

        return view('users.dashboard', compact('seizureRecords'));
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

        // Get the patient ID of the currently logged-in patient
        $patientId = $user->patient->id;

        // Add the patient ID to the validated data
        $validatedData['patient_id'] = $patientId;

        Seizure_records::create($validatedData);

        return redirect()->route('users.dashboard')->with('success', 'Seizure record added successfully.');
    }
}
