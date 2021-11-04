@extends('layouts.navbar')
@section('title')
Login
@endsection
@section('contents')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-12 col-md-5 col-lg-5">
            <div class="card login-info">
                <div class="card-body">
                    <h4 class="card-title mb-4 text-center">{{ __('Sign in') }}</h4>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" id="email" class="form-control @error('email') is-invalid @enderror form-list" placeholder="ex. name@gmail.com" type="email" required autocomplete="email" autofocus>
                           
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            @if (Route::has('password.request'))
                            <a class="float-right" href="{{ route('password.request') }}">Forgot Password?</a>
                            @endif
                            <label>Password</label>
                            <input class="form-control pt-4 pb-4 @error('password') is-invalid @enderror form-list" id="password" name="password" placeholder="******" type="password" required>
                            
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            <label class="custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" checked="" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <div class="custom-control-label"> Remember </div>
                            </label>
                        </div> <!-- form-group form-check .// -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block form-list" id = "login"> Login </button>
                        </div> <!-- form-group// -->
                    </form>
                    <hr />
                    <a href="#" class="btn btn-facebook btn-block mb-2 "> <i class="fab fa-facebook-f"></i> &nbsp Sign in with Facebook</a>
                    <a href="#" class="btn btn-google btn-block mb-4 "> <i class="fab fa-google"></i> &nbsp Sign in with Google</a>
                </div> <!-- card-body.// -->
                <div class="card-footer text-center">Don't have an account? <a href="{{route('register')}}">Sign up</a></div>
            </div>
        </div>
    </div>
</div>
@endsection