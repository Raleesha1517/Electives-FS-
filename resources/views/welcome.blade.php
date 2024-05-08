@extends('body')

@section('content')

<section id="hero" class="d-flex align-items-center">
  
    <div class="container d-flex flex-column align-items-center justify-content-center" data-aos="fade-up">
      <h1 style="font-weight: 500">Febrile Seizures</h1>
      <h1 tyle="font-weight: 500">උණ වලිප්පුව</h1>
      <h1 tyle="font-weight: 100">காய்ச்சல் வலிப்பு</h1>
      <h2>Select Your Language | ඔබේ භාෂාව තෝරන්න | உங்கள் மொழியைத் தேர்ந்தெடுக்கவும் </h2>
      <ul style="list-style: none; padding: 0; margin: 0; display: flex;">
        <li style="margin-right: 10px;"><a href="{{ route('localization', ['locale' => 'en', 'redirect' => 'awareness']) }}" class="btn-get-started scrollto">English</a></li>
        <li style="margin-right: 10px;"><a href="{{ route('localization', ['locale' => 'sn', 'redirect' => 'awareness']) }}" class="btn-get-started scrollto" id="sinhala">සිංහල</a></li>
        <li><a href="{{ route('localization', ['locale' => 'tm', 'redirect' => 'awareness']) }}" class="btn-get-started scrollto">சிங்களம்</a></li>
      </ul>
      {{-- <a href="#about" class="btn-get-started scrollto">English</a>
      <a href="#about" class="btn-get-started scrollto">Sinhala</a>
      <a href="#about" class="btn-get-started scrollto">Tamil</a> --}}
      <img src="assets/img/mother.png" class="img-fluid hero-img" alt="" data-aos="zoom-in" data-aos-delay="150">
    </div>

  </section><!-- End Hero -->


  @endsection