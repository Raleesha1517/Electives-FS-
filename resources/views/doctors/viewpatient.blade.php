
@extends('doctors.body')

@section('doctors.content')

<main id="main" class="main">
    <div class="container">
        <div class="card">
            <div class="card-header text-white" style="background-color: #117879; display: flex; justify-content: space-between;">
                <p class="card-text" style="font-size: larger; margin: 0;"><strong>{{ $patient->name }}</strong></p>
                <button class="btn btn-primary">Back</button>
            </div>
            
            <div class="card-body">
                <div class="row">
                    <!-- Important fields in one column -->
                    <div class="col-md-4">
                        {{-- <p class="card-title"><strong>{{ $patient->name }}</strong></p> --}}
                        <p class="card-title"><strong>Age:</strong> 
                            {{ calculateAge($patient->date_of_birth)['years'] }} years,
                            {{ calculateAge($patient->date_of_birth)['months'] }} months,
                            {{ calculateAge($patient->date_of_birth)['days'] }} days
                        </p>
                        <p class="card-text"><strong>Date of Birth:</strong> {{ $patient->date_of_birth }}</p>
                        <p class="card-text"><strong>PHN:</strong> {{ $user->phn }}</p>
                        <p class="card-text"><strong>Gender:</strong> {{ $patient->gender }}</p>
                        
                    </div>
                    <!-- Other fields in two columns -->
                    <div class="col-md-4">
                        <p class="card-title"><strong>Guardian Name:</strong> {{ $user->name }}</p>
                        <p class="card-text"><strong>Email:</strong> {{ $user->email }}</p>
                        <p class="card-text"><strong>Address:</strong> {{ $patient->address }}</p>
                        <p class="card-text"><strong>Blood Group:</strong> {{ $patient->blood_group }}</p>
                        <p class="card-text"><strong>Home Telephone:</strong> {{ $patient->home_telephone }}</p>
                    </div>
                    <div class="col-md-4">
                        <p class="card-title"><strong>Guardian Relationship:</strong> {{ $patient->guardian_relationship }}</p>
                        <p class="card-text"><strong>Mobile Number:</strong> {{ $patient->mobile_number }}</p>
                        <p class="card-text"><strong>Guardian NIC:</strong> {{ $patient->guardian_nic }}</p>
                        <p class="card-text"><strong>Medications:</strong> {{ $patient->medications }}</p>
                        <p class="card-text"><strong>Remarks:</strong> {{ $patient->remarks }}</p>
                        <!-- Add more patient details as needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</main>
<?php
// In your PHP file, define the calculateAge function
function calculateAge($dob) {
    // Create DateTime object for the date of birth
    $birthDate = new DateTime($dob);
    // Create DateTime object for today's date
    $today = new DateTime();
    // Calculate the difference between the two dates
    $age = $today->diff($birthDate);
    // Return the calculated age as an array
    return [
        'years' => $age->y,
        'months' => $age->m,
        'days' => $age->d
    ];
}
?>

@endsection 