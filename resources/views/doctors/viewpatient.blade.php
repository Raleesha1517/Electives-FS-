
@extends('doctors.body')

@section('doctors.content')

<main id="main" class="main">
    <div class="container">
        <div class="card">
            <div class="card-header text-white" style="background-color: #117879; display: flex; justify-content: space-between;">
                <p class="card-text" style="font-size: larger; margin: 0;"><strong>Child's Name : {{ $patient->name }}</strong></p>
                <a href="{{ route('doctors.dashboard') }}" class="btn custombtn">{{__('common.Back')}}</a>
            </div>
            
            <div class="card-body">
                <div class="row">
                    <!-- Important fields in one column -->
                    <div class="col-md-6">
                        {{-- <p class="card-title"><strong>{{ $patient->name }}</strong></p> --}}
                        <style>
                            .borderless-table {
                                border-collapse: collapse;
                                width: 100%;
                            }
                            .borderless-table td, .borderless-table th {
                                border: none;
                                padding: 8px;
                                text-align: left;
                            }
                        </style>
                        
                        <table class="borderless-table">
                            <tbody>
                                <tr>
                                    <td><strong>Age:</strong></td>
                                    <td>
                                        {{ calculateAge($patient->date_of_birth)['years'] }} years,
                                        {{ calculateAge($patient->date_of_birth)['months'] }} months,
                                        {{ calculateAge($patient->date_of_birth)['days'] }} days
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Date of Birth:</strong></td>
                                    <td>{{ $patient->date_of_birth }}</td>
                                </tr>
                                <tr>
                                    <td><strong>PHN:</strong></td>
                                    <td>{{ $user->phn }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Gender:</strong></td>
                                    <td>{{ $patient->gender }}</td>
                                </tr>
                            </tbody>
                        </table>
                        
                        
                    </div>
                    <!-- Other fields in two columns -->
                    <div class="col-md-6">
                        <table class="borderless-table">
                            <tbody>
                                <tr>
                                    <td><strong>Guardian Name:</strong></td>
                                    <td>{{ $user->name }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Email:</strong></td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Address:</strong></td>
                                    <td>{{ $patient->address }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Blood Group:</strong></td>
                                    <td>{{ $patient->blood_group }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Home Telephone:</strong></td>
                                    <td>{{ $patient->home_telephone }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Guardian Relationship:</strong></td>
                                    <td>{{ $patient->guardian_relationship }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Mobile Number:</strong></td>
                                    <td>{{ $patient->mobile_number }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Guardian NIC:</strong></td>
                                    <td>{{ $patient->guardian_nic }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Medications:</strong></td>
                                    <td>{{ $patient->medications }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Remarks:</strong></td>
                                    <td>{{ $patient->remarks }}</td>
                                </tr>
                            </tbody>
                        </table>
                        @if ($seizureRecords->isNotEmpty())
                        <h2>Seizure Records</h2>
                        <ul>
                            @foreach ($seizureRecords as $record)
                                <li>Date: {{ $record->date }}, Time: {{ $record->time }}, Duration: {{ $record->duration }}</li>
                                <li><a href="{{ route('record.delete', ['id' => $record->id]) }}" class="delete-link" 
                                    data-type="record" data-id="{{ $record->id }}" 
                                    onclick="return confirm('Are you sure you want to delete this Record?')">
                                    <span class="badge bg-danger" id="sinhala">{{__('common.Delete')}}</span>
                                  </a></li>
                                <!-- Add more seizure record details here -->
                            @endforeach
                        </ul>
                    @else
                        <p>No seizure records found for this patient.</p>
                    @endif
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