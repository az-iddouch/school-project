<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="/css/app.css">
        <title>Laravel</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="/css/fontawesome-all.min.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        
    </head>
    <body>


@include('layouts.nav')


<main>
    <div id="primary" class="p-t-b-100 height-full ">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mx-md-auto">
                    <div class="text-center">
                        <img src="{{asset('images/dummy/u5.png')}}" alt="">
                        <h2>Bienvenue de retour</h2>
                        <p class="p-t-b-20">c'est toujours bon de t'avoir de retour</p>
                    </div>
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
            </div>
        </div>
    </div>
    <!-- #primary -->
</main>

@include('layouts.footer')
