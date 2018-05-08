@extends('layouts.master')



@section('content')


<h1>Home</h1>

@foreach($services as $service )

    <h2>{{ $service->name }}</h2>
    <h5>{{ $service->default_price }} DHs</h5>
    <img src="{{ $service->image }}" style="width:250px; height:auto">
    <hr>

@endforeach


@endsection