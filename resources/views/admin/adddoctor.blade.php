@extends('admin.body')

@section('admin.content')

<main id="main" class="main">

    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Multi Columns Form</h5>

          <form method="POST" action="/admin/doctors" class="row g-3">
            @csrf
            <div class="col-md-12">
                <input type="hidden" name="usertype" value="2" class="form-control">
            </div>
            <div class="col-md-12">
                <label for="inputName" class="form-label">Name</label>
                <input type="text" name="name" id="inputName" class="form-control" placeholder="Name" required>
            </div>
            <div class="col-md-12">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required>
            </div>
            <div class="col-md-12">
                <label for="inputPassword" class="form-label">Password</label>
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
            </div>
            <div class="col-md-12">
                <label for="inputPhoneNumber" class="form-label">Phone Number</label>
                <input type="text" name="phone_number" id="inputPhoneNumber" class="form-control" placeholder="Phone Number">
            </div>
            <div class="col-md-12">
                <label for="inputDesignation" class="form-label">Designation</label>
                <input type="text" name="designation" id="inputDesignation" class="form-control" placeholder="Designation" required>
            </div>
            <div class="col-md-12">
                <label for="inputWard" class="form-label">Ward</label>
                <input type="text" name="ward" id="inputWard" class="form-control" placeholder="Ward">
            </div>
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Add Doctor</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
        </form>
        </div>
      </div>
</main>

@endsection


 
