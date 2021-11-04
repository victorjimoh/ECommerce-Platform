@extends('layouts.navbar')
@section('title')
Signup
@endsection
@section('contents')
<div class="container mt-5">
    <div class="row justify-content-center">

        <div class="col-12 col-sm-12 col-md-8 col-lg-6">
            <div class="card login-info">
                <article class="card-body">
                    <header class="mb-4">
                        <h4 class="card-title text-center">{{ __('Signup')}}</h4>
                    </header>
                    <form method="POST" action="{{route('register')}}" id = "form-register">
                        @csrf
                        <div class="form-row">
                            <div class="col form-group">
                                <label>First name</label>
                                <input type="text" class="form-control @error('firstname') is-invalid @enderror form-list" placeholder="John" name="firstname" id="firstname" >
                                @error('firstname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div> <!-- form-group end.// -->
                            <div class="col form-group">
                                <label>Last name</label>
                                <input type="text" class="form-control @error('lastname') is-invalid @enderror form-list" placeholder="Doe" name="lastname" id="lastname" >
                                @error('lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div> <!-- form-group end.// -->
                        </div> <!-- form-row end.// -->
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control form-list @error('email') is-invalid @enderror" placeholder="johndoe@mail.com" name="email" id="email"  autocomplete="email">
                            <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                        </div> <!-- form-group end.// -->
                        <div class="form-group radio-btn">
                            <label class="custom-control custom-radio custom-control-inline">
                                <input class="custom-control-input @error('gender') is-invalid @enderror" type="radio" name="gender" id="gender" value = "Male">
                                <span class="custom-control-label"> Male </span>
                                @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </label>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input class="custom-control-input @error('gender') is-inavlid @enderror" type="radio" name="gender" id="gender" value = "Female">
                                <span class="custom-control-label"> Female </span>
                                @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </label>
                        </div> <!-- form-group end.// -->
                        <div class="form-group">
                            <label>Country</label>
                            <input type="text" class="form-control @error('country') is-invalid @enderror form-list" placeholder="United States" name="country" id="country" >
                            @error('country')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div> <!-- form-row.// -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Create password</label>
                                <input class="form-control @error('password') is-invalid @enderror form-list" type="password" placeholder="******" name="password" id="password"  autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div> <!-- form-group end.// -->
                            <div class="form-group col-md-6">
                                <label>Repeat password</label>
                                <input class="form-control form-list" type="password" id="password-confirm" name="password_confirmation"  autocomplete="new-password">
                            </div> <!-- form-group end.// -->
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary btn-block form-list"> Register </button>
                        </div> <!-- form-group// -->
                        <p class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our Terms of use and Privacy Policy.</p>
                    </form>
                    <hr>
                    <p class="text-center">Have an account? <a href="{{route('login')}}">Log In</a></p>
                </article> <!-- card-body end .// -->
            </div> <!-- card.// -->

        </div>
    </div>
</div>

@endsection