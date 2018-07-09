
@section('pre-nav')

    <!-- if in home page  -->
    <div class="promotionsBar green responsive">
            <img src="./images/dummy/promo-banner.png" alt=""> <a href="#" class="gtco-nav-toggle gtco-nav-white active closePromotions"><i></i></a>
    </div>

@endsection

@extends('layouts.master')

@section('content')
<div class="content-wrapper">
	<div class="container">
<div class="row">
	<div class="col-xl-3">
		<!--side bar goes here  -- >
			<!--widget-best-seller-->
		@include('layouts.sidebar')
	</div>

<div class="col-xl-9">
	<div class="xv-product-slides grid-view products" data-thumbnail="figure .xv-superimage"
		data-product=".xv-product-unit">
		<div class="row">
			<!-- //////////// -->
			@foreach($services as $service)
			<div class="xv-product-unit">
				<div class="xv-product mb-15 mt-15 paper-block">
					<figure>
						<a href="#"><img class="xv-superimage" src="{{ asset('images/services/'.$service->id.'.png') }}" alt=""></a>
						<figcaption>
							<ul class="style1">
								<li><a data-qv-tab="#qvt-wishlist" class=" btn-square btn-blue"
									href="#"><i class="fas fa-heart"></i></a>
								</li>
							</ul>
						</figcaption>
					</figure>
					<div class="xv-product-content">
						<h3><a href="/services/{{$service->id}}">{{ $service->name }}</a></h3>
						<ul
							class="color-opt">
							<li><a href="#">White</a>
							</li>
							<li><a href="#">Black</a>
							</li>
							<li><a href="#">Gold</a>
							</li>
						</ul>
						<!-- <ul class="extra-links">
							<li><a href="#"><i class="icon icon-heart"></i>Wishlist</a>
							</li>
							<li><a href="#"><i class="icon icon-exchange"></i>Compare</a>
							</li>
							<li><a href="#"><i class="icon icon-expand"></i>Expand</a>
							</li>
							</ul> -->
						<!--ul-->
						<div class="xv-rating stars-5"></div>
						<span class="xv-price"> {{ $service->default_price }} DHs </span>
						<a data-qv-tab="#qvt-cart" href="shop-single.html"
							class="product-buy "><i class="fas fa-shopping-basket"
							aria-hidden="true"></i></a>
					</div>
					<!--xv-product-content-->
				</div>
			</div>
			@endforeach
			<!--xv-product(list-view)-->
		</div>
	</div>
</div>
</div>
</div>
</div>
<!-- end row -->

</div>
@endsection