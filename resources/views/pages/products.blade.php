@extends('layouts.navbar')
@section('title')
Product Details
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
                    <a class="nav-link text-capitalize" href="{{route('products-category', ['category_slug' => $item->slug])}}">{{$item->name}}</a>
                </li>
                @endforeach

            </ul>
        </div> <!-- collapse .// -->
    </div> <!-- container .// -->
</nav>
@endsection
@section('contents')
<section class="section-content padding-y bg">
<div class="container">

<!-- ============================ COMPONENT 1 ================================= -->
<div class="card">
	<div class="row no-gutters">
		<aside class="col-md-6">
<article class="gallery-wrap"> 
	<div class="img-big-wrap">
	   <a href="#"><img src="{{asset('images')}}/{{$product->image}}"></a>
	</div> <!-- img-big-wrap.// -->
	<div class="thumbs-wrap">
	  <a href="#" class="item-thumb"> <img src="../images/items/12-1.jpg"></a>
	  <a href="#" class="item-thumb"> <img src="../images/items/12-2.jpg"></a>
	  <a href="#" class="item-thumb"> <img src="../images/items/12.jpg"></a>
	  <a href="#" class="item-thumb"> <img src="../images/items/4.jpg"></a>
	</div> <!-- thumbs-wrap.// -->
</article> <!-- gallery-wrap .end// -->
		</aside>
		<main class="col-md-6 border-left">
<article class="content-body">

<h2 class="title">{{$product->name}}</h2>

<div class="rating-wrap my-3">
	<ul class="rating-stars">
		<li style="width:80%" class="stars-active">
			<img src="../images/icons/stars-active.svg" alt="">
		</li>
		<li>
			<img src="../images/icons/starts-disable.svg" alt="">
		</li>
	</ul>
	<small class="label-rating text-muted">132 reviews</small>
	<small class="label-rating text-success"> <i class="fa fa-clipboard-check"></i> 154 orders </small>
</div> <!-- rating-wrap.// -->

<div class="mb-3"> 
	<var class="price h4">${{$product->price}}</var> 
	<span class="text-muted">/per kg</span> 
</div> 

<p>{{$product->short_description}}.</p>

<dl class="row">
  <dt class="col-sm-3">Model#</dt>
  <dd class="col-sm-9">Odsy-1000</dd>

  <dt class="col-sm-3">Color</dt>
  <dd class="col-sm-9">Brown</dd>

  <dt class="col-sm-3">Delivery</dt>
  <dd class="col-sm-9">Russia, USA, and Europe </dd>
</dl>

<hr>
	<div class="row">
		<div class="form-group col-md flex-grow-0">
			<label>Quantity</label>
			<div class="input-group mb-3 input-spinner">
			  <div class="input-group-prepend">
			    <button class="btn btn-light" type="button" id="button-plus"> + </button>
			  </div>
			  <input type="text" class="form-control" value="1">
			  <div class="input-group-append">
			    <button class="btn btn-light" type="button" id="button-minus"> &minus; </button>
			  </div>
			</div>
		</div> <!-- col.// -->
		<div class="form-group col-md">
				<label>Select size</label>
				<div class="mt-2">
					<label class="custom-control custom-radio custom-control-inline">
					  <input type="radio" name="select_size" checked="" class="custom-control-input">
					  <div class="custom-control-label">Small</div>
					</label>

					<label class="custom-control custom-radio custom-control-inline">
					  <input type="radio" name="select_size" class="custom-control-input">
					  <div class="custom-control-label">Medium</div>
					</label>

					<label class="custom-control custom-radio custom-control-inline">
					  <input type="radio" name="select_size" class="custom-control-input">
					  <div class="custom-control-label">Large</div>
					</label>

				</div>
		</div> <!-- col.// -->
	</div> <!-- row.// -->
	
	<form method = "POST" action = "{{route('products.store')}}">
		@csrf

		<input type = "hidden" name ="product_id" value = "{{$product->id}}">
		<button type = "submit" class = "btn btn-outline-primary btn-block">
		<span class="text">Add to cart</span> <i class="fas fa-shopping-cart"></i>
		</button>
	</form>
</article> <!-- product-info-aside .// -->
        </main>
    </div>
</div>
</div>
</section>

<section class="section-content">
<div class="container">

<header class="section-heading">
	<h3 class="section-title">Related Products</h3>
</header><!-- sect-heading -->

	
<div class="row">
	@if($related_products->count())
	@foreach($related_products as $related)
	<div class="col-md-3">
		<div href="#" class="card card-product-grid">
			<a href="{{route('products-details', ['slug'=> $related->slug])}}" class="img-wrap"> <img src="{{asset('images')}}/{{$related->image}}"> </a>
			<figcaption class="info-wrap">
				<a href="{{route('products-details', ['slug'=> $related->slug])}}" class="title">{{$related->name}}</a>
				
				<div class="rating-wrap">
					<ul class="rating-stars">
						<li style="width:80%" class="stars-active"> 
							<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
						</li>
						<li>
							<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 
						</li>
					</ul>
					<span class="label-rating text-muted"> 34 reviws</span>
				</div>
				<div class="price mt-1">${{$related->price}}</div> <!-- price-wrap.// -->
			</figcaption>
		</div>
	</div>
	@endforeach
	@else
	<div class = "text-center">
		<h6>No Related Products</h6>
	</div>
	@endif
</div>
</div>
</section>
@endsection
