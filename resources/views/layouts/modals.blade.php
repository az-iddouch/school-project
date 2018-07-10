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
					<h3>welcome de retour</h3>
					<p class="p-t-b-20">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil maiores vero numquam! Consequatur .
					</p>
				</div>
				<div class="light p-40 b-t-b">
					<form action="/login" method="POST">
						@csrf
						<div class="form-group has-icon"><i class="fas fa-envelope"></i>
							<input id="login_email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="e-mail" required autofocus>
						</div>
						<div class="form-group has-icon"><i class="fas fa-unlock-alt"></i>
							<input id="login_password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="mote de passe" required>
						</div>
						<input type="submit" class="btn btn-primary btn-lg btn-block" value="Connexion">
						<small class="forget-pass">Avez-vous oublié votre nom d'utilisateur ou mot de passe?</small>
					</form>
				</div>
				<div class="p-40"><a href="#" class="btn btn-lg btn-block btn-social facebook">
					<i class="icon-facebook"></i> Login avec Facebook
					</a>
					<a href="#" class="btn btn-lg btn-block btn-social twitter">
					<i class="icon-twitter"></i> Login avec Twitter
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
							<h5 class="p-t-40">S'authentifier en utilisant les réseaux souciaux </h5>
							<p class="p-t-b-20">Hey Soldier welcome back signin now there is lot of new stuff waiting
								for you
							</p>
							<a href="#" class="btn btn-lg btn-block btn-social facebook">
							<i class="icon-facebook"></i> Login avec Facebook
							</a>
							<a href="#" class="btn btn-lg btn-block btn-social twitter">
							<i class="icon-twitter"></i> Login avec Twitter
							</a>
						</div>
					</div>
					<div class="col-lg-7">
						<div class="light p-t-b-40">
							<div class="p-40">
								<h5 class="p-b-20">Créer un nouveau compte</h5>
								<form action="/register" method="POST">
								@csrf
									<div class="form-group has-icon"><i class="fas fa-user"></i>
										<input id="register_name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="nom" required autofocus>
									</div>
									<div class="form-group has-icon"><i class="fas fa-envelope"></i>
										<input id="register_email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="e-mail" required>
									</div>
									<div class="form-group has-icon"><i class="fas fa-unlock-alt"></i>
										<input id="register_password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="mote de passe" required>
									</div>
									<div class="form-group has-icon"><i class="fas fa-redo"></i>
										<input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="confirmer le mote de passe " required>
									</div>
									<input type="submit" class="btn btn-primary btn-lg btn-block" value="Enregistrer vous ">
									<!-- <p class="forget-pass">A verification email wil be sent to you</p> -->
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