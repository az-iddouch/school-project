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
<div class="light b-t">
    <div id="primary" class="content-area"
         data-bg-possition="center"
         data-bg-repeat="false"
         style="background: url('assets/img/icon/icon-circles.png');">


  <main id="main" class="site-main" role="main">
            <div class="container">
                <div class="col-xl-8 mx-lg-auto p-t-b-80">
                    <header class="text-center">
                        <h1>Créer un nouveau comptet</h1>
                        <p>Join Our wonderful community and let others help you without a single
                            penny</p>
                        <img class="p-t-b-50" src="{{asset('images/dummy/u5.png')}}" alt="">
                    </header>
                    <form action="/register" method="POST">
						@csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group has-icon"><i class="fas fa-user"></i>
										<input id="register_name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="nom" required autofocus>
								</div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group has-icon"><i class="fas fa-envelope"></i>
									<input id="register_email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="e-mail" required>
								</div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group has-icon"><i class="fas fa-unlock-alt"></i>
									<input id="register_password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="mote de passe" required>
								</div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group has-icon"><i class="fas fa-redo"></i>
									<input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="confirmer le mote de passe " required>
								</div>
                            </div>
                            <div class="col-lg-12">
                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Enregistrer vous ">
                                <!-- <p class="forget-pass">A verification email wil be sent to you</p> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>

        </div>
        </div>

@include('layouts.footer')
