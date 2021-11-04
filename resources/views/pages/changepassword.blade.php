@extends('layouts.navbar')
@section('title')
Change Password
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
                        <h5 class="card-title mb-4">Change Password</h5>
                        @if (session('error'))
                        <div class="alert alert-dismissible animate fade show color-for-error bg-darken-sm shadow-md shadow-primary text-white rounded-pill" role="alert">
                            {{ session('error') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        @endif
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
                        <form method="POST" action="{{route('updatepassword')}}" enctype="multipart/form-data">
                            @csrf
                        
                            <div class="form-row">
                                <div class="col form-group">
                                    <label>Current Password</label>
                                    <input type="password" class="form-control form-list" name="currentpassword" id="currentpassword" placeholder="Enter Current Password">
                                </div> <!-- form-group end.// -->
                            </div>
                            <div class="form-row">
                                <div class="col form-group">
                                    <label>New Password</label>
                                    <input class="form-control form-list" type="password" placeholder="******" name="new_password" id="new_password" required>
                                </div> <!-- form-group end.// -->
                            </div>
                            <div class="form-row">
                                <div class="col form-group">
                                    <label>Confirm Password</label>
                                    <input class="form-control form-list" type="password" placeholder="******" id="password-confirm" name="new_password_confirmation" required>
                                </div> <!-- form-group end.// -->
                            </div>
                            <div class="form-row mt-3">
                                <div class="col form-group">
                                    <button type="submit" class="btn btn-primary btn-block form-list">Submit</button>
                                </div> <!-- form-group end.// -->
                            </div>
                        </form>
                    </div>
                </article>
            </main>
        </div>
    </div>
</section>
@endsection
