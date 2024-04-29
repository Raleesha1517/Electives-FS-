<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      {{-- <h1 class="logo"><a href="index.html">Febrile seizures</a></h1> --}}
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.html" class="logo"><img src="assets/img/logo2.png" alt=""  ></a>
      <img>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="/awareness">Awareness</a></li>
          <li><a class="nav-link scrollto" href="#services">About Us</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Contact Us</a></li>
          <li class="dropdown"><a href="#"><span>Language</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              {{-- <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li> --}}
              @foreach (config('localization.locales') as $locale)
              @switch($locale)
                  @case('en')
                      @php $displayName = 'English'; @endphp
                      @break
                  @case('sn')
                      @php $displayName = 'Sinhala'; @endphp
                      @break
                  @case('tm')
                      @php $displayName = 'Tamil'; @endphp
                      @break
                  @default
                      @php $displayName = ucfirst($locale); @endphp
              @endswitch

              <li><a href="{{ route('localization', $locale) }}">{{ $displayName }}</a></li>
             @endforeach
{{-- 
              <li><a href="#">English</a></li>
              <li><a href="#">Sinhala</a></li>
              <li><a href="#">Tamil</a></li> --}}
            </ul>
          </li>
          @if (Route::has('login'))
                
                    @auth
                        @if (Auth::user()->usertype == 1)
                            <li><a href="{{ url('/users/dashboard') }}" class="getstarted scrollto">PROFILE</a></li>
                        @elseif (Auth::user()->usertype == 2)
                            <li><a href="{{ url('/doctors/dashboard') }}" class="getstarted scrollto">PROFILE</a></li>
                        @elseif (Auth::user()->usertype == 3)
                            <li><a href="{{ url('/admin/dashboard') }}" class="getstarted scrollto">PROFILE</a></li>
                        @endif

                        {{-- <li><a href="{{ url('/profile') }}" class="getstarted scrollto">PROFILE</a></li> --}}

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <li>
                            <a href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"
                              class="getstarted scrollto">LOG OUT</a>
                        </li>
                    @else
                        <li><a href="{{ route('login') }}" class="getstarted scrollto">LOG IN</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class=" getstarted scrollto">REGISTER</a></li>
                        @endif
                    @endauth
                
            @endif
          {{-- <li><a class="getstarted scrollto" href="/login">LOG IN</a></li>
          <li><a class="getstarted scrollto" href="/register">REGISTER</a></li> --}}
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>