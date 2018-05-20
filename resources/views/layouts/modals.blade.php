@if(Auth::guest())
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
					<form action="/login" method="POST">
						@csrf
						<div class="form-group has-icon"><i class="icon-envelope-o"></i>
							<input id="login_email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
						</div>
						<div class="form-group has-icon"><i class="icon-user-secret"></i>
							<input id="login_password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
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
								<form action="/register" method="POST">
								@csrf
									<div class="form-group has-icon"><i class="icon-user-circle"></i>
										<input id="register_name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="name" required autofocus>
									</div>
									<div class="form-group has-icon"><i class="icon-envelope-o"></i>
										<input id="register_email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="email" required>
									</div>
									<div class="form-group has-icon"><i class="icon-user-secret"></i>
										<input id="register_password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
									</div>
									<div class="form-group has-icon"><i class="icon-repeat"></i>
										<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
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
@endif