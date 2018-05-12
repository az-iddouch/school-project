
@section('pre-nav')

    <!-- if in home page  -->
    <div class="promotionsBar green responsive">
            <img src="./images/dummy/promo-banner.png" alt=""> <a href="#" class="gtco-nav-toggle gtco-nav-white active closePromotions"><i></i></a>
    </div>

@endsection

@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-xl-3">
		<!--side bar goes here  -- >i
			<!--widget-best-seller-->
		@include('layouts.sidebar')
	</div>
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
						<a href="#"><img class="xv-superimage" src="./images/demo/s5.png" alt=""></a>
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
<!-- end row -->
<!-- Login modal -->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog width-400" role="document">
		<div class="modal-content no-r ">
			<a href="#" data-dismiss="modal" aria-label="Close"
				class="paper-nav-toggle active"><i></i></a>
			<div
				class="modal-body no-p">
				<div class="text-center p-40 p-b-0">
					<img src="./images/dummy/u4.png" alt="">
					<h3>Welcome Back</h3>
					<p class="p-t-b-20">Hey Soldier welcome back signin now there is lot of new stuff waiting
						for you
					</p>
				</div>
				<div class="light p-40 b-t-b">
					<form action="dashboard2.html">
						<div class="form-group has-icon"><i class="icon-envelope-o"></i>
							<input type="text" class="form-control form-control-lg"
								placeholder="Email Address">
						</div>
						<div class="form-group has-icon"><i class="icon-user-secret"></i>
							<input type="text" class="form-control form-control-lg"
								placeholder="Password">
						</div>
						<input type="submit" class="btn btn-primary btn-lg btn-block" value="Log In">
						<small class="forget-pass">Have you forgot your username or password ?</small>
					</form>
				</div>
				<div class="p-40"><a href="#" class="btn btn-lg btn-block btn-social facebook">
					<i class="icon-facebook"></i> Login with Facebook
					</a>
					<a href="#" class="btn btn-lg btn-block btn-social twitter">
					<i class="icon-twitter"></i> Login with Twitter
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- SignUp modal -->
<div class="modal fade" id="modalSignUp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content no-r ">
			<a href="#" data-dismiss="modal" aria-label="Close"
				class="paper-nav-toggle active"><i></i></a>
			<div
				class="modal-body no-p">
				<div class="row">
					<div class="col-lg-5 grid">
						<div class="p-40">
							<h5 class="p-t-40">Sign Up Using Social Account</h5>
							<p class="p-t-b-20">Hey Soldier welcome back signin now there is lot of new stuff waiting
								for you
							</p>
							<a href="#" class="btn btn-lg btn-block btn-social facebook">
							<i class="icon-facebook"></i> Login with Facebook
							</a>
							<a href="#" class="btn btn-lg btn-block btn-social twitter">
							<i class="icon-twitter"></i> Login with Twitter
							</a>
						</div>
					</div>
					<div class="col-lg-7">
						<div class="light p-t-b-40">
							<div class="p-40">
								<h5 class="p-b-20">Create New User Account</h5>
								<form action="dashboard2.html ">
									<div class="form-group has-icon"><i class="icon-user-circle"></i>
										<input type="text" class="form-control form-control-lg"
											placeholder="Your Name">
									</div>
									<div class="form-group has-icon"><i class="icon-envelope-o"></i>
										<input type="text" class="form-control form-control-lg"
											placeholder="Email Address">
									</div>
									<div class="form-group has-icon"><i class="icon-user-secret"></i>
										<input type="text" class="form-control form-control-lg"
											placeholder="Password">
									</div>
									<div class="form-group has-icon"><i class="icon-repeat"></i>
										<input type="text" class="form-control form-control-lg"
											placeholder="Confirm Password">
									</div>
									<input type="submit" class="btn btn-primary btn-lg btn-block" value="Sign Up Now">
									<p class="forget-pass">A verification email wil be sent to you</p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection