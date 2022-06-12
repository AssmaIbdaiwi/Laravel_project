@extends('layouts.app')

@section('content')




<!-- Section: Design Block -->

<section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="https://lawguideline.org/wp-content/uploads/2021/08/Donate-Used-Medical-Equipment-Near-Me.jpg"
                  alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height:640px;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center" style="background: hsla(175, 77%, 88%, 0.55)">
                <div class="card-body p-4 p-lg-5 text-black">
  
                  <form method="POST" action="{{ route('login') }}">
                    @csrf
  
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                      <span class="h1 fw-bold mb-0">Log in</span>
                    </div>
  
                    
  
                    <div class="form-outline mb-4">
                      <label class="form-label" for="email">{{ __('Email Address') }}</label>
                      <input type="email" id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />

                      @error('email')
                         <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                         </span>
                      @enderror
                     
                    </div>
  
                    <div class="form-outline mb-4">
                      <label class="form-label" for="password">{{ __('Password') }}</label>
                      <input type="password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"/>
                      
                      @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                      
                    </div>
  
                    <div class="pt-1 mb-4">
                      <button class="btn btn-dark btn-lg btn-block" type="submit">{{ __('Login') }}</button>

                      @if (Route::has('password.request'))
                      <a class="btn btn-link" href="{{ route('password.request') }}">
                          {{ __('Forgot Your Password?') }}
                      </a>
                     @endif
                    </div>

                   
                      
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                              <label class="form-check-label" for="remember">
                                  {{ __('Remember Me') }}
                              </label>
                          </div>
                      
                     <br>
                  
                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="{{ route('register') }}"
                        style="color: #393f81;">{{ __('Register Here') }}</a></p>
                    

                    
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->
@endsection
