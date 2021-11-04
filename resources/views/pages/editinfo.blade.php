@extends('layouts.navbar')
@section('title')
Edit Information
@endsection

@section('navbar')
<nav class="navbar navbar-main navbar-expand-lg navbar-light border-bottom">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon "></span>
                </button>

                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link pl-0" data-toggle="dropdown" href="#"><strong> <i class="fa fa-bars"></i> &nbsp All category</strong></a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Foods and Drink</a>
                                <a class="dropdown-item" href="#">Home interior</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Category 1</a>
                                <a class="dropdown-item" href="#">Category 2</a>
                                <a class="dropdown-item" href="#">Category 3</a>
                            </div>
                        </li>
                        @foreach($category as $item)
                        <li class="nav-item">
                            <a class="nav-link text-capitalize" href="">{{$item->name}}</a>
                        </li>
                        @endforeach
                        
                    </ul>
                </div> <!-- collapse .// -->
            </div> <!-- container .// -->
        </nav>
@endsection
@section('contents')
<section class="section-pagetop bg">
    <div class="container">
        <h2 class="title-page">Edit Information</h2>
    </div> <!-- container //  -->
</section>
<!-- ========================= SECTION PAGETOP END// ========================= -->

<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">
    <div class="container">

        <div class="row">
            <aside class="col-md-3">
                <nav class="list-group">
                    <a class="list-group-item active" href="{{route('account')}}"> Account overview </a>
                    <a class="list-group-item" href="#"> My Address </a>
                    <a class="list-group-item" href="#"> My Orders </a>
                    <a class="list-group-item" href="#"> My wishlist </a>
                    <a class="list-group-item" href="#"> My Selling Items </a>
                    <a class="list-group-item" href="#"> Settings </a>
                    <a class="list-group-item" href="#"> Log out </a>
                </nav>
            </aside> <!-- col.// -->
            <main class="col-md-9">
                <article class="card  mb-3">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Edit Information</h5>
                        @if (session('status'))
                        <div class="alert alert-dismissible animate fade show color-for-success bg-darken-sm shadow-md shadow-primary text-white rounded-pill" role="alert">
                            {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        @endif
                        @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>
                                    {{ $error }}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form method="POST" action="{{route('update')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="col form-group">
                                    <label>First name</label>
                                    <input type="text" class="form-control form-list" placeholder="" name="firstname" id="firstname" value="{{ old('firstname', auth()->user()->firstname) }}">
                                </div> <!-- form-group end.// -->
                                <div class="col form-group">
                                    <label>Last name</label>
                                    <input type="text" class="form-control form-list" name="lastname" id="lastname" placeholder="" value="{{ old('lastname', auth()->user()->lastname) }}">
                                </div> <!-- form-group end.// -->
                            </div> <!-- form-row end.// -->
                            <div class="form-row">
                                <div class="col form-group">
                                    <label>Gender</label>
                                    <select class="custom-select form-control form-list" name = "gender">
                                        <option>Please select</option>
                                        <option name = "gender" value = "Male">Male</option>
                                        <option name = "gender" value = "Female">Female</option>
                                    </select>
                                </div> <!-- form-group end.// -->
                                <div class="col form-group">
                                    <label>Email</label>
                                    <input class="form-control form-list" type="email" id="email" name="email" value="{{ old('email', auth()->user()->email) }}" disabled>
                                </div> <!-- form-group end.// -->
                            </div> <!-- form-row end.// -->
                            <div class="form-row">
                                <div class="col form-group">
                                    <label>Phone Number</label>
                                    <div class="input-group">
                                        <select class="custom-select form-list" style="max-width: 120px;">
                                            <option selected="">+234</option>
                                        </select>
                                        <input name="phonenumber" id="number" class="form-control form-list" placeholder="Phone number" type="number" value="{{ old('phonenumber', auth()->user()->phonenumber) }}">
                                    </div>
                                </div>
                                <!-- form-group end.// -->
                                <div class="col form-group">
                                    <label>Country</label>
                                    <input type="text" name="country" id="country" class="form-control form-list" value="{{ old('country', auth()->user()->country) }}">
                                </div> <!-- form-group end.// -->
                            </div> <!-- form-row end.// -->
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary btn-block form-list"> Register </button>
                            </div>
                        </form>
                    </div> <!-- row.// -->
        </div> <!-- card-body .// -->
        </article>
        </main> <!-- col.// -->
    </div>
    </div>
</section>
@endsection