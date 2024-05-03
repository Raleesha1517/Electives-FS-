
@extends('doctors.body')

@section('doctors.content')

<main id="main" class="main">

  <form method="POST" action="/admin/doctors">
    @csrf
    <input type="text" name="name" placeholder="Name">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <input type="hidden" name="usertype" value="1" class="form-control">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="name" required>
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
        <input type="text" name="address" class="form-control" id="address">
    </div>

    <div class="mb-3">
        <label for="blood_group" class="form-label">Blood Group</label>
        <input type="text" name="blood_group" class="form-control" id="blood_group">
    </div>

    <div class="mb-3">
        <label for="home_telephone" class="form-label">Home Telephone</label>
        <input type="text" name="home_telephone" class="form-control" id="home_telephone">
    </div>

    <div class="mb-3">
        <label for="mobile_number" class="form-label">Mobile Number</label>
        <input type="text" name="mobile_number" class="form-control" id="mobile_number">
    </div>

    <div class="mb-3">
        <label for="guardian_name" class="form-label">Guardian Name</label>
        <input type="text" name="guardian_name" class="form-control" id="guardian_name">
    </div>

    <div class="mb-3">
        <label for="guardian_relationship" class="form-label">Guardian Relationship</label>
        <input type="text" name="guardian_relationship" class="form-control" id="guardian_relationship">
    </div>

    <div class="mb-3">
        <label for="guardian_nic" class="form-label">Guardian NIC</label>
        <input type="text" name="guardian_nic" class="form-control" id="guardian_nic">
    </div>

    <div class="mb-3">
        <label for="medications" class="form-label">Medications</label>
        <input type="text" name="medications" class="form-control" id="medications">
    </div>

    <div class="mb-3">
        <label for="remarks" class="form-label">Remarks</label>
        <textarea name="remarks" class="form-control" id="remarks" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</main>

@endsection 