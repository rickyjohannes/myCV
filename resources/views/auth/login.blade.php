@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-5">
            <div class="wrap">
                <div class="img" style="background-image: url(img/bg-1.jpg);"></div>
                <div class="login-wrap p-4 p-md-5">
              <div class="d-flex">
                  <div class="w-100">
                      <h3 class="mb-4">Sign In</h3>
                  </div>
                        <div class="w-100">
                            <p class="social-media d-flex justify-content-end">
                                <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                                <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                            </p>
                        </div>
              </div>
                    <form method="POST" action="{{ route('login') }}" class="signin-form">
                    @csrf
                          <div class="form-group mt-3">
                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                              <label class="form-control-placeholder" for="username">Email</label>
                              @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                          </div>
                          <br>

                        <div class="form-group">
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                          <label class="form-control-placeholder" for="password">Password</label>

                          @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                          <span toggle="#password-field" class="fa "></span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
                        </div>

                        <div class="form-group d-md-flex">
                            <div class="w-50 text-left">
                                <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                          <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                          <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="w-50 text-md-right">
                                            <a href="{{ route('password.request') }}">Forgot Password</a>
                                        </div>
                        </div>
          </form>
          <p class="text-center">Not a member? <a data-toggle="tab" href="{{ route('register') }}">Sign Up</a></p>
        </div>
      </div>
        </div>
    </div>
</div>
@endsection
