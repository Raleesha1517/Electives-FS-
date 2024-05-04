<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{ url('assets/img/logo2.png') }}" alt="">
        <span class="d-none d-lg-block">Dr. {{ Auth::user()->name }}</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li><a href="{{ url('/awareness') }}" class="nav-link nav-profile d-flex align-items-center pe-0">HOME</a></li>

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->phn }}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{ Auth::user()->name }}</h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            
            <li>
                
              {{-- <a class="dropdown-item d-flex align-items-center"> --}}
                <x-dropdown-link :href="route('profile.edit')" class="dropdown-item d-flex align-items-center">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
                </x-dropdown-link>
              {{-- </a> --}}
            </li>
              <hr class="dropdown-divider">
            </li>
            
            <li>
              {{-- <a class="dropdown-item d-flex align-items-center" href="#"> --}}
                
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
        
                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();" class="dropdown-item d-flex align-items-center">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Log Out</span>
                    </x-dropdown-link>
                </form>
                
                
              {{-- </a> --}}
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header>