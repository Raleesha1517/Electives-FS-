<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      {{-- <h1 class="logo"><a href="index.html">Febrile seizures</a></h1> --}}
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.html" class="logo"><img src="assets/img/logo2.png" alt=""  ></a>
      <img>

      {{-- Button group --}}
      {{-- <div class="btn-group" role="group" aria-label="Language selection">
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
            <button type="button" class="btn btn-secondary" onclick="window.location='{{ route('localization', $locale) }}'">{{ $displayName }}</button>
        @endforeach
    </div> --}}
    <div class="btn-group d-md-none">
        @foreach (config('localization.locales') as $locale)
            @switch($locale)
                @case('en')
                    @php $displayName = 'ENG'; @endphp
                    @break
                @case('sn')
                    @php $displayName = 'සිං'; @endphp
                    @break
                @case('tm')
                    @php $displayName = 'சிங்'; @endphp
                    @break
                @default
                    @php $displayName = ucfirst($locale); @endphp
            @endswitch
            <button type="button" class="btn" onclick="window.location='{{ route('localization', $locale) }}'">
              {{ $displayName }}</button>
        @endforeach
    </div> 
      
    

      <nav id="navbar" class="navbar">
        <ul>

            <li>
                <a class="nav-link scrollto {{ Route::currentRouteName() == 'welcome' ? 'active' : '' }}" href="{{ route('welcome') }}">Home</a>
            </li>
            <li>
                <a class="nav-link scrollto {{ Route::currentRouteName() == 'awareness.index' ? 'active' : '' }}" href="{{ route('awareness.index') }}">Awareness</a>
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
            <li class="d-none d-md-block">
                <div class="btn-group" style="margin-left: 30px">
                    @foreach (config('localization.locales') as $locale)
                        @switch($locale)
                            @case('en')
                                @php $displayName = 'ENG'; @endphp
                                @break
                            @case('sn')
                                @php $displayName = 'සිං'; @endphp
                                @break
                            @case('tm')
                                @php $displayName = 'சிங்'; @endphp
                                @break
                            @default
                                @php $displayName = ucfirst($locale); @endphp
                        @endswitch
                        <button type="button" class="btn" onclick="window.location='{{ route('localization', $locale) }}'">
                          {{ $displayName }}</button>
                    @endforeach
                </div> 
            </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header>

            {{-- <li><a class="getstarted scrollto" href="/login">LOG IN</a></li>
          <li><a class="getstarted scrollto" href="/register">REGISTER</a></li> --}}