<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link {{ Route::currentRouteName() !== 'admin.dashboard' ? 'collapsed' : '' }}" href="{{ route('admin.dashboard') }}">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
        </a>
    </li>    
    
    <li class="nav-heading">Registering</li>
    
    <li class="nav-item">
      <a class="nav-link {{ Route::currentRouteName() !== 'admin.doctors' ? 'collapsed' : '' }}" href="{{ route('admin.doctors') }}">
          <i class="bi bi-card-list"></i>
          <span>Add Doctor</span>
      </a>
  </li>
  
    
     
  <li class="nav-item">
    <a class="nav-link {{ Route::currentRouteName() !== 'admin.admin' ? 'collapsed' : '' }}" href="{{ route('admin.admin') }}">
        <i class="bi bi-card-list"></i>
        <span>Add Admin</span>
    </a>
</li>

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Add Patient</span>
        </a>
      </li> --}}
      {{-- <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav --> --}}

    </ul>

  </aside>