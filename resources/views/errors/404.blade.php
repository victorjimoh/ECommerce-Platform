@extends('layouts.navbar')

@section('title')
Not Found
@endsection
@section('contents')
<div class="page-wrap d-flex flex-row align-items-center ">
    <div class="container">
        <div class="row justify-content-center mt-5 mb-5">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 text-center">
                <img src = "{{asset('images/sorry.png')}}" class = "w-50">
                <span class="display-1 d-block">404</span>
                <div class="mb-4 lead">The page you are looking for was not found.</div>
               <a href = "{{route('myhome')}}"><button type="button" class="btn btn-primary btn-block">Back To Home</button></a>
                
            </div>
        </div>
    </div>
</div>
@endsection