
@extends('doctors.body')

@section('doctors.content')

<main id="main" class="main">

    <form method="POST" action="{{ route('doctors.patient') }}">
        @csrf
        <div class="mb-3">
            <label for="username" class="form-label">Guardian Name</label>
            <input type="text" name="username" class="form-control" id="username" placeholder="Username" required>
        </div>
    
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
        </div>
    
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
        </div>
    
        <input type="hidden" name="user_type" value="1" class="form-control">
        
        <div class="mb-3">
            <label for="name" class="form-label">Child Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
        </div>
    
        <div class="mb-3">
            <label for="date_of_birth" class="form-label">Date of Birth</label>
            <input type="date" name="date_of_birth" class="form-control" id="date_of_birth" required>
        </div>
    
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" name="age" class="form-control" id="age">
        </div>
    
        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select name="gender" class="form-select" id="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>
    
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" name="address" class="form-control" id="address" placeholder="Address">
        </div>
    
        <div class="mb-3">
            <label for="blood_group" class="form-label">Blood Group</label>
            <input type="text" name="blood_group" class="form-control" id="blood_group" placeholder="Blood Group">
        </div>
    
        <div class="mb-3">
            <label for="home_telephone" class="form-label">Home Telephone</label>
            <input type="text" name="home_telephone" class="form-control" id="home_telephone" placeholder="Home Telephone">
        </div>
    
        <div class="mb-3">
            <label for="mobile_number" class="form-label">Mobile Number</label>
            <input type="text" name="mobile_number" class="form-control" id="mobile_number" placeholder="Mobile Number">
        </div>
    
        <div class="mb-3">
            <label for="guardian_name" class="form-label">Guardian Name</label>
            <input type="text" name="guardian_name" class="form-control" id="guardian_name" placeholder="Guardian Name">
        </div>
    
        <div class="mb-3">
            <label for="guardian_relationship" class="form-label">Guardian Relationship</label>
            <input type="text" name="guardian_relationship" class="form-control" id="guardian_relationship" placeholder="Guardian Relationship">
        </div>
    
        <div class="mb-3">
            <label for="guardian_nic" class="form-label">Guardian NIC</label>
            <input type="text" name="guardian_nic" class="form-control" id="guardian_nic" placeholder="Guardian NIC">
        </div>
    
        <div class="mb-3">
            <label for="medications" class="form-label">Medications</label>
            <input type="text" name="medications" class="form-control" id="medications" placeholder="Medications">
        </div>
    
        <div class="mb-3">
            <label for="remarks" class="form-label">Remarks</label>
            <textarea name="remarks" class="form-control" id="remarks" rows="3" placeholder="Remarks"></textarea>
        </div>
    
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
</main>

@endsection 