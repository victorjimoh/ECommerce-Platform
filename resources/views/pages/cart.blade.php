@extends('layouts.navbar')

@section('title')
Cart
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
<section class="section-content padding-y">
    <div class="container">
        @if (session('success'))
        <div class="alert alert-dismissible animate fade show color-for-success bg-darken-sm shadow-md shadow-primary text-white rounded-pill" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        @endif
        @if($cart->count())
        <div class="row">
            <main class="col-md-9">
                @foreach($cart as $item)
                <article class="card card-body mb-3">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <figure class="itemside">
                                <div class="aside"><img src="{{asset('images')}}/{{$item->model->image}}" class="border img-sm"></div>
                                <figcaption class="info">
                                    <span class="text-muted">Wears</span>
                                    <a href="#" class="title">{{$item->name}}</a>
                                </figcaption>
                            </figure>
                        </div> <!-- col.// -->
                        <div class="col">
                            <div class="input-group input-spinner">
                                <div class="input-group-prepend">
                                    <button class="btn btn-light" type="button" id="button-plus"> <i class="fa fa-minus"></i> </button>
                                </div>
                                <input type="text" class="form-control" value="1">
                                <div class="input-group-append">
                                    <button class="btn btn-light" type="button" id="button-minus"> <i class="fa fa-plus"></i> </button>
                                </div>
                            </div> <!-- input-group.// -->
                        </div> <!-- col.// -->
                        <div class="col">
                            <div class="price h5"> ${{$item->price}}</div>
                        </div>
                        <div class="col flex-grow-0 text-right">
                            <form method="POST" action="{{route('cart.destroy', ['rowId' => $item->rowId])}}">
                                @csrf
                                <button type = "submit" class="btn btn-light"> <i class="fa fa-times"></i> </button>
                            </form>

                        </div>
                    </div> <!-- row.// -->
                </article> <!-- card .// -->
                @endforeach
            </main> <!-- col.// -->
            <aside class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="" placeholder="Promo code">
                            <span class="input-group-append">
                                <button class="btn btn-primary">Ok</button>
                            </span>
                        </div>
                        <dl class="dlist-align">
                            <dt>Subtotal:</dt>
                            <dd class="text-right">${{$cartSub}}</dd>
                        </dl>
                        <dl class="dlist-align">
                            <dt>Discount:</dt>
                            <dd class="text-right text-danger">0%</dd>
                        </dl>
                        <dl class="dlist-align">
                            <dt>Grand Total:</dt>
                            <dd class="text-right text-dark"><strong>${{$cartSub}}</strong></dd>
                        </dl>
                        <hr>
                        <a href="#" class="btn btn-primary btn-block"> Purchase </a>

                        <p class="small my-3 text-muted">Some extra informative text can be placed here as dummy text will be replaced</p>
                        <a href="#" class="btn btn-outline-warning btn-block">Installment</a>
                    </div> <!-- card-body.// -->
                </div> <!-- card.// -->
            </aside> <!-- col.// -->
        </div>
        @else
        <div class="page-wrap d-flex flex-row align-items-center ">
            <div class="container">
                <div class="row justify-content-center ">
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 text-center">
                        <img src="{{asset('images/images.png')}}" class="w-50">
                        <h1 class="lead cart-heading">Wa ti ma gbo.</h1>
                        <!--<h1 class="lead cart-heading">Your Cart is empty.</h1>-->
                        <p class="mb-4 cart-body">Trap lan je, Bimbo trap lan je.</p>
                        <!-- <p class = "mb-4 cart-body">Browse our categories and discover our best deals!</p>-->
                        <a href="{{route('myhome')}}"><button type="button" class="btn btn-primary btn-block">Return Back To Shopping</button></a>

                    </div>
                </div>
            </div>
        </div>
        @endif
    </div> <!-- container .//  -->
</section>
@endsection