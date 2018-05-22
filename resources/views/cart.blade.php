@extends('layouts.master')



@section('content')


 <div class="search-section">
        <div class="container">
            <h1>Cart</h1>
        </div>
    </div>
    <div class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="/">Home</a>
                </li>
                <li class="active">Cart</li>
            </ol>
        </div>
    </div>
    <div class="content-wrapper">
        <div class="container">

        @if(session()->has('success_message'))

            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('success_message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        @endif

        @if(Cart::count() > 0)

            <h4>{{ Cart::count()}} Élément(s) dans votre pannier </h4>

            <table class="table table-striped paper-block">
                <colgroup>
                    <col class="col-1">
                    <col class="col-5">
                    <col class="col-1">
                    <col class="col-2">
                    <col class="col-1">
                    <col class="col-1">
                </colgroup>
                <thead>
                <tr>
                    <th></th>
                    <th>Nom de produit</th>
                    <th>Prix</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
                </thead>
                <tbody>

                @foreach(Cart::content() as $item)

                <tr>
                    <td>
                        <figure>
                            <img src="{{ asset('images/services/s5.png') }}" alt="">
                        </figure>
                    </td>
                    <td><a href="/services/{{$item->id}}">{{$item->name}}</a></td>
                    <td>{{ $item->price }} Dhs</td>
                    <td>
                        <div class="quantity"><span class="xv-qyt xv-qup" data-value="1">+</span>
                            <span class="xv-qyt xv-down"
                                  data-value="-1">-</span>
                            <input step="1" min="1" max="9999999" name="quantity"
                                   value="{{ $item->options->has('quantity') ? $item->options->quantity : '' }}"  class="input-text qty text" size="4" type="number">
                        </div>
                    </td>
                    <td>total</td>

                    <!-- needs fixing -->
                    <form action="/cart/{{$item->$rowId}}" method="POST">
                    @csrf
                    {{ method_field('DELETE') }}
                        <td>
                            <button type="submit"><i class="fas fa-recycle"></i></button>
                        </td>
                    </form>
                </tr>
              
                @endforeach

                </tbody>
            </table>

            @else

            <h4>Pas d' éléments dans votre pannier !</h4>

            @endif

            <div class="row p-b-40">
                <div class="col-12 col-md-4 alignright">
                    <div class="paper-block">
                        <h4>Total</h4>
                        <table class="table table-striped tabs-vertical">
                            <tbody>
                            <tr>
                                <th>Products</th>
                                <td><span class="price">$1,000.00</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Shiping Cost</th>
                                <td><span class="price">$200.00</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Grand Total</th>
                                <td><span class="price">$1,200.00</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <input class="btn btn-success btn-block btn-lg" value="Proceed to checkout"
                               type="submit">
                    </div>
                </div>
                <div class="col-12 col-md-4 alignright">
                    <div class="paper-block">
                        <h4>Estimate Shipping</h4>
                        <div class="custome-select style2"><span>London <b class="xv-angle-down"></b></span>
                            <select>
                                <option>United States</option>
                                <option>Austraila</option>
                                <option>London</option>
                            </select>
                        </div>
                        <div class="custome-select style2 "><span>Austraila <b class="xv-angle-down"></b></span>
                            <select>
                                <option>United States</option>
                                <option>Austraila</option>
                                <option>London</option>
                            </select>
                        </div>
                        <input class="btn btn-info" value="Apply Code" type="submit">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection