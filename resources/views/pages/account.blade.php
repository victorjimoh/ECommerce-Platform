@extends('layouts.navbar')

@section('title')
My Account
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
        <h2 class="title-page">Shopping cart</h2>
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

                <article class="card mb-3">
                    <div class="card-body">
                        <h4>Account Overview</h4>
                        <hr>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="card">
                                    <h5 class="card-header account-information">Account Information <a href="{{route('editinformation')}}" class="float-right">Edit </a></h5>
                                    <div class="card-body">
                                        <h6 class="card-title">{{ Auth::user()->firstname}} {{ Auth::user()->lastname}}</h6>
                                        <p class="card-text mb-5">{{ Auth::user()->email }}</p>
                                        <a href="{{route('changepassword')}}" class=""><b>CHANGE PASSWORD</b></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="card">
                                    <h5 class="card-header account-information">Address Information <a href="#" class="float-right">Edit </a></h5>
                                    <div class="card-body">
                                        <h6 class="card-title">Your default shipping address:</h6>
                                        <p class="card-text">{{ Auth::user()->firstname}} {{ Auth::user()->lastname}}</p>
                                        <p class="card-text">{{ Auth::user()->phonenumber}} |</p>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <article class="card-group card-stat">
                            <figure class="card bg">
                                <div class="p-3">
                                    <h4 class="title">38</h4>
                                    <span>Orders</span>
                                </div>
                            </figure>
                            <figure class="card bg">
                                <div class="p-3">
                                    <h4 class="title">5</h4>
                                    <span>Wishlists</span>
                                </div>
                            </figure>
                            <figure class="card bg">
                                <div class="p-3">
                                    <h4 class="title">12</h4>
                                    <span>Awaiting delivery</span>
                                </div>
                            </figure>
                            <figure class="card bg">
                                <div class="p-3">
                                    <h4 class="title">50</h4>
                                    <span>Delivered items</span>
                                </div>
                            </figure>
                        </article>
                    </div> <!-- card-body .// -->
                </article> <!-- card.// -->

                 <!-- card.// -->

            </main> <!-- col.// -->

        </div>
    </div>
</section>


@endsection