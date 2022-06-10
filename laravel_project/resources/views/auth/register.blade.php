@extends('layouts.app')

@section('content')





<section class="h-100 h-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-8 col-xl-6">
          <div class="card rounded-3">
            <img src="https://www.scarce.org/wp-content/uploads/2018/12/medical-equipment-supplies.jpg"
              class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
              alt="Sample photo">
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration Info</h3>
  
              <form method="POST" action="{{ route('register') }}">
                @csrf
  
                <div class="form-outline mb-4">
                    <label class="form-label" for="name">{{ __('Name') }}</label>
                  <input type="text" id="name" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus/>


                  @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="email">{{ __('Email Address') }}</label>
                  <input type="email" id="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>


                  @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>

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

                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary" style="width:200px">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
