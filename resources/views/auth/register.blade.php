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
                      <h3 class="mb-4">Registration</h3>
                  </div>
                        
              </div>
                    <form method="POST" action="{{ route('register') }}" class="signin-form">
                    @csrf

                         <div class="form-group mt-3">
                              <input id="name" type="text"  class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                              <label class="form-control-placeholder" for="name">Name</label>
                              @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                          </div>

                          <br>


                          <div class="form-group mt-3">
                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                              <label class="form-control-placeholder" for="username">Email</label>
                              @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                          </div>

                          <br>

                        <div class="form-group">
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                          <label class="form-control-placeholder" for="password">Password</label>

                          @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                          <span toggle="#password-field" class="fa"></span>
                        </div>

                        <div class="form-group">
                          <input input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                          <label class="form-control-placeholder" for="password">Confirm Password</label>

                          @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                          <span toggle="#password-field" class="fa "></span>
                        </div>

                        <div>
                            <input type="hidden" name="role" value="user" id="role">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary rounded submit px-3">Register</button>
                        </div>

                        
          </form>
         
        </div>
      </div>
        </div>
    </div>
</div>
@endsection
