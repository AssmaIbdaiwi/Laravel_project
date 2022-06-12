@extends('layouts.app')

@section('content')

<!-- Section: Design Block -->
<section class="text-center text-lg-start">
    <style>
      .cascading-right {
        margin-right: -50px;
      }
  
      @media (max-width: 991.98px) {
        .cascading-right {
          margin-right: 0;
        }
      }
    </style>
  
    <!-- Jumbotron -->
    <div class="container py-4">
      <div class="row g-0 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card cascading-right" style="
              background: hsla(175, 77%, 88%, 0.55);
              backdrop-filter: blur(30px);
              ">
            <div class="card-body p-5 shadow-5 text-center">
              <h2 class="fw-bold mb-5">Sign up now</h2>
              <form  method="POST" action="{{ route('register') }}">
                @csrf
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="name">{{ __('Name') }}</label>
                    <input type="text" id="name" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus/>
                    
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
  
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="email">{{ __('Email Address') }}</label>
                    <input type="email" id="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>

                  @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                 
                </div>
  
                <!-- Password input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="password">{{ __('Password') }}</label>
                  <input type="password" id="password" class="form-control  @error('password') is-invalid @enderror" name="password"required autocomplete="new-password"/>


                  @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>


                <div class="form-outline mb-4">
                    <label class="form-label" for="password-confirm">{{ __('Confirm Password') }}</label>
                  <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required autocomplete="new-password"/>

                </div>
  
                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                  <label class="form-check-label" for="form2Example33">
                    Subscribe to our Donations
                  </label>
                </div>
  
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4" style="width: 200px">
                    {{ __('Register') }}
                </button>
  
                
               
              </form>
            </div>
          </div>
        </div>
  
        <div class="col-lg-6 mb-5 mb-lg-0">
          <img src="https://bloximages.newyork1.vip.townnews.com/dothaneagle.com/content/tncms/assets/v3/editorial/9/03/9030f8aa-c1bd-55d6-8abc-f1a4625894c8/5ed1676b180e4.image.jpg?crop=1489%2C1117%2C182%2C0&resize=1489%2C1117&order=crop%2Cresize" class="w-100 rounded-4 shadow-4"
            alt="" height="667px"/>
        </div>
      </div>
    </div>
    <!-- Jumbotron -->
  </section>

  
@endsection
