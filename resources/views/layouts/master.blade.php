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

<div id="app">
    <main>
    

        <!-- <div class="content-wrapper">

            <div class="container"> -->

                @yield('content')

            <!-- </div>

        </div> -->
        
    </main>
</div>

    @include('layouts.footer')
    @include('layouts.modals')

       
    </body>
</html>
