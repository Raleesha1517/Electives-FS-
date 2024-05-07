
@extends('users.body')

@section('users.content')

<main id="main" class="main">

    <div class="container" >
        <div class="row justify-content-center">
            <div class="col-md-12" >
                <div class="card" style="
                  background: linearr-gradient(to left, #91c7e3, #ffffff); 
                  border: solid #8abede 2px; ">
                  {{-- linear-gradient(to top, #91c7e3, #ffffff) --}}
                    <div class="card-header" style="margin-bottom: 10px; background: #90c6e2; color: #012970; font-weight:bold" id="sinhala">
                      {{ __('common.SeizureRecord') }}</div>
    
                    <div class="card-body">
                        <form method="POST" action="/users/records">
                            @csrf
                        
                            <div class="row mb-3">
                                <label for="date" class="col-sm-2 col-form-label" id="sinhala">{{ __('common.Date') }}</label>
                                <div class="col-sm-10">
                                    <input id="date" style="
                                    border: solid #8abede 2px; " type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" required autofocus>
                                    @error('date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        
                            <div class="row mb-3">
                                <label for="time" class="col-sm-2 col-form-label" id="sinhala">{{ __('common.Time') }}</label>
                                <div class="col-sm-10">
                                    <input id="time" style="
                                    border: solid #8abede 2px; " type="time" class="form-control @error('time') is-invalid @enderror" name="time" value="{{ old('time') }}" required>
                                    @error('time')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        
                            <div class="row mb-3">
                                <label for="temperature" class="col-sm-2 col-form-label" id="sinhala">{{ __('common.Temperature') }}</label>
                                <div class="col-sm-10">
                                    <input id="temperature" style="
                                    border: solid #8abede 2px; " type="number" step="0.01" class="form-control @error('temperature') is-invalid @enderror" name="temperature" value="{{ old('temperature') }}">
                                    @error('temperature')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        
                            <div class="row mb-3">
                                <label for="fever" class="col-sm-2 col-form-label" id="sinhala">{{ __('common.Fever') }}</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" style="
                                    border: solid #8abede 2px; " type="radio" id="fever_yes" name="fever" value="1">
                                        <label class="form-check-label" for="fever_yes" id="sinhala">{{ __('common.Yes') }}</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" style="
                                    border: solid #8abede 2px; " type="radio" id="fever_no" name="fever" value="0">
                                        <label class="form-check-label" for="fever_no" id="sinhala">{{ __('common.No') }}</label>
                                    </div>
                                    @error('fever')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                        
                            <div class="row mb-3">
                                <label for="duration" class="col-sm-2 col-form-label" id="sinhala">{{ __('common.Duration') }}</label>
                                <div class="col-sm-10">
                                    <input id="duration" style="
                                    border: solid #8abede 2px; " type="text" class="form-control @error('duration') is-invalid @enderror" name="duration" value="{{ old('duration') }}" required>
                                    @error('duration')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        
                            <div class="row mb-3">
                                <label for="episode_number" class="col-sm-2 col-form-label" id="sinhala">{{ __('common.Episode') }}</label>
                                <div class="col-sm-10">
                                    <input id="episode_number" style="
                                    border: solid #8abede 2px; " type="number" class="form-control @error('episode_number') is-invalid @enderror" name="episode_number" value="{{ old('episode_number') }}" required>
                                    @error('episode_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        
                            <div class="row mb-3">
                                <label for="description" class="col-sm-2 col-form-label" id="sinhala">{{ __('common.Description') }}</label>
                                <div class="col-sm-10">
                                    <textarea id="description" style="
                                    border: solid #8abede 2px; " class="form-control @error('description') is-invalid @enderror" name="description" rows="3" required>{{ old('description') }}</textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        
                            <!-- Add more form fields as needed -->
                        
                            <div class="row mb-3">
                                <div class="col-sm-10 offset-sm-2">
                                    <button type="submit" class="btn btn-primary" 
                                    style="background-color: #90c6e2; color:#ffffff; border: none" id="sinhala">
                                        {{ __('common.Submit') }}
                                    </button>
                                    <button type="reset" class="btn btn-secondary" id="sinhala"> {{ __('common.Reset') }}</button>
                                    <a href="{{ route('users.dashboard') }}" class="btn btn-primary"
                                    style="background-color: #90c6e2; color:#ffffff; border: none" id="sinhala">{{__('common.Back')}}</a>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- 
    <div class="pagetitle">
      <h1>Form Elements</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">General Form Elements</h5>

              <!-- General Form Elements -->
              <form>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Text</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Number</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputTime" class="col-sm-2 col-form-label">Time</label>
                  <div class="col-sm-10">
                    <input type="time" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputColor" class="col-sm-2 col-form-label">Color Picker</label>
                  <div class="col-sm-10">
                    <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#4154f1" title="Choose your color">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Textarea</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px"></textarea>
                  </div>
                </div>
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                      <label class="form-check-label" for="gridRadios1">
                        First radio
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                      <label class="form-check-label" for="gridRadios2">
                        Second radio
                      </label>
                    </div>
                    <div class="form-check disabled">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios" value="option" disabled>
                      <label class="form-check-label" for="gridRadios3">
                        Third disabled radio
                      </label>
                    </div>
                  </div>
                </fieldset>
                <div class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Checkboxes</legend>
                  <div class="col-sm-10">

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck1">
                      <label class="form-check-label" for="gridCheck1">
                        Example checkbox
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck2" checked>
                      <label class="form-check-label" for="gridCheck2">
                        Example checkbox 2
                      </label>
                    </div>

                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Disabled</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="Read only / Disabled" disabled>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Select</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Multi Select</label>
                  <div class="col-sm-10">
                    <select class="form-select" multiple aria-label="multiple select example">
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

        
      </div>
    </section> --}}

  </main>

  @endsection