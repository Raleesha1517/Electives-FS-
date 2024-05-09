<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link {{ Route::currentRouteName() !== 'users.dashboard' ? 'collapsed' : '' }}"  href="{{ route('users.dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Route::currentRouteName() !== 'awareness.index' ? 'collapsed' : '' }}"  href="{{ route('awareness.index') }}">
          <i class="bi bi-grid"></i>
          <span>Awareness</span>
        </a>
      </li><!-- End Dashboard Nav -->

      

      <li class="nav-item">
        <a class="nav-link {{ Route::currentRouteName() !== 'users.records' ? 'collapsed' : '' }}" href="{{ route('users.records') }}">
          <i class="bi bi-grid"></i>
          <span>Add Records</span>
        </a>
      </li>

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('profile.edit') }}">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav --> --}}


    </ul>

  </aside>