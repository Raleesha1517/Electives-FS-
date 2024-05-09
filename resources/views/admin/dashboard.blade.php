{{-- <h1>Admin</h1>
<x-dropdown align="right" width="48">
    <x-slot name="trigger">
        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
            <div>{{ Auth::user()->name }}</div>

            <div class="ms-1">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </div>
        </button>
    </x-slot>

    <x-slot name="content">
        <x-dropdown-link :href="route('profile.edit')">
            {{ __('Profile') }}
        </x-dropdown-link>

        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-dropdown-link>
        </form>
    </x-slot>
</x-dropdown>

<form method="POST" action="{{ route('logout') }}">
    @csrf

    <x-dropdown-link :href="route('logout')"
            onclick="event.preventDefault();
                        this.closest('form').submit();">
        {{ __('Log Out') }}
    </x-dropdown-link>
</form> --}}

@extends('admin.body')

@section('admin.content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        @if(session('success'))
          <div class="alert alert-success">
              {{ session('success') }}
          </div>
        @endif

        @if(session('delete'))
        <div class="alert alert-danger">
            {{ session('delete') }}
        </div>
      @endif


        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Admins <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people" style="color: black"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $adminsCount }}</h6>
                      {{-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> --}}

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Doctors <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" style="background-color: rgb(200, 234, 214)">
                      <i class="bi bi-people" style="color: rgb(21, 184, 45);"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $doctorsCount }}</h6>
                      {{-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> --}}

                    </div>
                  </div>
                </div>

              </div>
            </div>
            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">
                <div class="card-body">
                  <h5 class="card-title">Mothers</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $usersCount }}</h6>
                      {{-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> --}}

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

           {{-- section --}}

           {{-- users --}}
            
            

            {{-- doctors --}}

            <div class="col-12">
              <div class="card top-selling overflow-auto">
                <a href="/admin/doctors" class="btn custombtn" style="margin: 10px 10px 10px 10px">Add New Doctor</a>
                  
                  <div class="card-body pb-0">
                      <h5 class="card-title">Doctors <span>| All</span></h5>
          
                      <table class="table table-borderless">
                          <thead>
                              <tr>
                                  <th scope="col">Number</th>
                                  <th scope="col">Doctor Name</th>
                                  <th scope="col">Phone Number</th>
                                  <th scope="col">Specialty</th>
                                  <th scope="col">Ward</th>
                                  <th scope="col">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($doctors as $index => $doctor)
                              <tr>
                                  <td>{{ $index + 1 }}</td>
                                  <td>{{ $doctor->user->name }}</td>
                                  <td>{{ $doctor->phone_number }}</td>
                                  <td>{{ $doctor->designation }}</td>
                                  <td>{{ $doctor->ward }}</td>
                                  <!-- Inside the table body where you display doctors -->
                                  <td>
                                    <a href="{{ route('admin.doctors.delete', ['id' => $doctor->id]) }}" class="delete-link" data-type="doctor" data-id="{{ $doctor->id }}" onclick="return confirm('Are you sure you want to delete this doctor?')">
                                        <span class="badge bg-danger">delete</span>
                                    </a>
                                  </td>

                              </tr>
                              @endforeach
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
          
          {{-- patients --}}

          <div class="col-12">
            <div class="card top-selling overflow-auto">
                <a href="/admin/admin" class="btn custombtn" style="margin: 10px 10px 10px 10px">Add New Admin</a>
                
                <div class="card-body pb-0">
                    <h5 class="card-title">Admins <span>| All</span></h5>
        
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">Number</th>
                                <th scope="col">Admin Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                                <!-- Add more headers if necessary -->
                            </tr>
                        </thead>
                        <tbody>
                            @php $adminIndex = 1; @endphp
                            @foreach ($user as $user)
                                @if ($user->usertype == 3)
                                <tr>
                                    <td>{{ $adminIndex }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <!-- Inside the table body where you display admins -->
                                    <td>
                                      <a href="{{ route('admin.admins.delete', ['id' => $user->id]) }}" class="delete-link" data-type="user" data-id="{{ $user->id }}" onclick="return confirm('Are you sure you want to delete this admin?')">
                                          <span class="badge bg-danger">delete</span>
                                      </a>
                                    </td>
                                </tr>
                                @php $adminIndex++; @endphp
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <div class="col-12">
          <div class="card top-selling overflow-auto"> 
            <div class="card-body pb-0">
              <h5 class="card-title">Patients <span>| All</span></h5>

              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col">number</th>
                    <th scope="col">Guardian Name</th>
                    <th scope="col">Child Name</th>
                    <th scope="col">Birthday</th>
                    <th scope="col">PHN Number</th>
                    <th scope="col">View More</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($patient as $index => $patient)
                  <tr>
                      <td>{{ $index + 1 }}</td>
                      <td>{{ $patient->user->name }}</td> <!-- Assuming there's a relationship between Patient and User -->
                      <td>{{ $patient->name }}</td>
                      <td>{{ $patient->date_of_birth }}</td>
                      <td>{{ $patient->user->phn }}</td>
                      <td><a href="{{ route('doctors.viewPatientDetails', $patient->id) }}"><span class="badge bg-success">See More</span></a></td>
                      <!-- Replace the delete links with the following -->
                      <td>
                        <a href="{{ route('admin.patients.delete', ['id' => $patient->id]) }}" class="delete-link" data-type="patient" data-id="{{ $patient->id }}" onclick="return confirm('Are you sure you want to delete this patient?')">
                            <span class="badge bg-danger">delete</span>
                        </a>
                      </td>
                  </tr>
              @endforeach
              
                </tbody>
              </table>
            </div>
          </div>
        </div>

          </div>
        </div><!-- End Left side columns -->

        {{-- <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Website Traffic -->
          <div class="card">
            
            <div class="card-body pb-0">
              <h5 class="card-title">Website Traffic <span>| Today</span></h5>

              <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#trafficChart")).setOption({
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      top: '5%',
                      left: 'center'
                    },
                    series: [{
                      name: 'Access From',
                      type: 'pie',
                      radius: ['40%', '70%'],
                      avoidLabelOverlap: false,
                      label: {
                        show: false,
                        position: 'center'
                      },
                      emphasis: {
                        label: {
                          show: true,
                          fontSize: '18',
                          fontWeight: 'bold'
                        }
                      },
                      labelLine: {
                        show: false
                      },
                      data: [{
                          value: 1048,
                          name: 'Search Engine'
                        },
                        {
                          value: 735,
                          name: 'Direct'
                        },
                        {
                          value: 580,
                          name: 'Email'
                        },
                        {
                          value: 484,
                          name: 'Union Ads'
                        },
                        {
                          value: 300,
                          name: 'Video Ads'
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div><!-- End Website Traffic -->

        
        </div><!-- End Right side columns --> --}}

      </div>
    </section>

  </main>







@endsection