
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
                                        {{-- {{ calculateAge($patient->date_of_birth)['years'] }} years,
                                        {{ calculateAge($patient->date_of_birth)['months'] }} months,
                                        {{ calculateAge($patient->date_of_birth)['days'] }} days --}}
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
                        
                    </div>
                </div>
            </div>
        </div>
        @php
        $totalRecords = $seizureRecords->count();
         @endphp
        <div class="card">
            <div class="card-header text-white" style="background-color: #117879; display: flex; justify-content: space-between;">
                <p class="card-text" style="font-size: larger; margin: 0;"><strong>Seizure Records | Total records : {{ $totalRecords }}</strong></p>
                <a href="/doctors/records/{{ $patient->id }}" id="sinhala">
                    <span class="badge custombtn">{{__('common.SeizureRecord1')}}</span>
                </a>    
            </div>
            <div class="card-body">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    @foreach ($seizureRecords as $record)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading{{ $record->id }}" style="background-color: #ffffff; color: white;">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                                data-bs-target="#flush-collapse{{ $record->id }}" aria-expanded="false" 
                                aria-controls="flush-collapse{{ $record->id }}">
                                    <strong>{{ $record->episode_number }} Episode | Date: {{ $record->date }}</strong>
                                </button>
                            </h2>
                            <div id="flush-collapse{{ $record->id }}" class="accordion-collapse collapse" 
                                aria-labelledby="flush-heading{{ $record->id }}" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th scope="row">Time</th>
                                                <td>{{ $record->time }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Temperature (Fahrenheit)</th>
                                                <td>{{ $record->temperature }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Fever</th>
                                                <td>{{ $record->fever }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Duration (Seconds)</th>
                                                <td>{{ $record->duration }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Description</th>
                                                <td>{{ $record->description }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Delete Record</th>
                                                <td><a href="{{ route('doctor.delete', ['id' => $record->id]) }}" class="delete-link" data-type="record" data-id="{{ $record->id }}" onclick="return confirm('Are you sure you want to delete this Record?')">
                                                    <span class="badge bg-danger">{{__('common.Delete')}}</span>
                                                  </a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        @if (!$loop->last)
                            <hr style="border-top: 1px solid #ccc;">
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        
        
        
        
        
        
       
    </div>
    
</main>

<?php
// function calculateAge($dob) {
//     $birthDate = new DateTime($dob);
//     $today = new DateTime();
//     $age = $today->diff($birthDate);
//     return [
//         'years' => $age->y,
//         'months' => $age->m,
//         'days' => $age->d
//     ];
// }
?>

@endsection 

{{-- @if ($seizureRecords->isNotEmpty())
<h2>Seizure Records</h2>
<ul>
    @foreach ($seizureRecords as $record)
        <li>Date: {{ $record->date }}, Time: {{ $record->time }}, Duration: {{ $record->duration }}</li>
        <li><a href="{{ route('doctor.delete', ['id' => $record->id]) }}" class="delete-link" 
            data-type="record" data-id="{{ $record->id }}" 
            onclick="return confirm('Are you sure you want to delete this Record?')">
            <span class="badge bg-danger" id="sinhala">{{__('common.Delete')}}</span>
          </a></li>
    @endforeach
</ul>
@else
<p>No seizure records found for this patient.</p>
@endif --}}