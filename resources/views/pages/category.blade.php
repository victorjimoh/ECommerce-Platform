@extends('layouts.navbar')

@section('title')
Shops
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
                    <a class="nav-link text-capitalize" href="#">Hello world</a>
                </li>
                @endforeach

            </ul>
        </div> <!-- collapse .// -->
    </div> <!-- container .// -->
</nav>
@endsection
@section('contents')
<section class="section-content padding-bottom-sm">
    <div class="container">

        <header class="section-heading">
            <a href="#" class="btn btn-outline-primary float-right">See all</a>
            <h3 class="section-title text-capitalize">{{$categoryName}}</h3>
        </header><!-- sect-heading -->

        <div class="row">
            @if($products->count())
            @foreach($products as $product)
            <div class="col-md-3">
                <div href="#" class="card card-product-grid">
                    <a href="{{route('products-details', ['slug'=> $product->slug])}}" class="img-wrap"> <img src="{{asset('images')}}/{{$product->image}}"> </a>
                    <figcaption class="info-wrap">
                        <a href="{{route('products-details', ['slug'=> $product->slug])}}" class="title">{{$product->name}}</a>
                        <div class="price mt-1">{{$product->price}}</div> <!-- price-wrap.// -->
                    </figcaption>
                </div>
            </div>
            @endforeach
            @else
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 text-center">
                <span class="display-1 d-block">Hello, There are No Products.</span>
                <div class="mb-4 lead">Kindly check back later Thanks.</div>
                <a href="{{route('myhome')}}"><button type="button" class="btn btn-primary btn-block">Back To Home</button></a>

            </div>
        </div>
        @endif
        <!-- col.// -->
        <!-- col.// -->
    </div> <!-- col.// -->
    {!! $products->render() !!}
    </div> <!-- row.// -->

    <!-- container .//  -->
</section>
@endsection