@extends('layouts.master')



@section('content')


 <div class="search-section">
        <div class="container">
            <h1>Panier</h1>
        </div>
    </div>
    <div class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="/">Acceuil</a>
                </li>
                <li class="active">Panier</li>
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

            <h4>{{ count(Cart::instance('default')->content())}} Élément(s) dans votre pannier </h4>


            <table class="table table-striped paper-block">
                <colgroup>
                    <col class="col-1">
                    <col class="col-5">
                    <col class="col-3">
                    <col class="col-2">
                    <col class="col-1">
                    <col class="col-2">
                    <col class="col-1">
                    <col class="col-1">
                    <col class="col-1">
                </colgroup>
                <thead>
                <tr>
                    <th></th>
                    <th>Nom de produit</th>
                    <th>Options</th>
                    <th>options-prix</th>
                    <th>Prix</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>

                @foreach(Cart::content() as $item)

                <tr>
                    <td>
                        <figure>
                            <img src="{{ asset('images/services/'.$item->id.'.png') }}" alt="">
                        </figure>
                    </td>
                    <td><a href="/services/{{$item->id}}">{{$item->name}}</a></td>
                    <td>


                    <!-- needs work -->
                        @if($item->options->has('serviceOptions'))
                                @foreach($item->options['serviceOptions'] as $serviceOption)


                                <ul>
                                    <li>
                                        {{ $serviceOption->label}}
                                    </li>
                                </ul>
                                
                            @endforeach
                        @endif


                    </td>
                    <td>
                        <!--needs work  -->

                         @if($item->options->has('optionsArray'))
                                @foreach($item->options['optionsArray'] as $selectedOption)


                                <ul>
                                    <li>
                                        + {{ $selectedOption}}
                                    </li>
                                </ul>  
                                
                                @endforeach
                            @endif

                       
                       

                    </td>
                    <td>{{ $item->price }} Dhs</td>
                    <td>
                        <div class="quantity">
                            <input step="1" min="1" max="9999999" name="quantity"
                                   value="{{ $item->qty }}"  class="input-text qty text" size="4" type="number" disabled>
                        </div>
                    </td>
                    <td>
                        {{ $item->price * $item->qty }} DHs
                    </td>

                    <td>
                        <a href="/services/{{$item->id}}">edit</a>
                    </td>

                    <td>
                        <form action=""></form>
                    </td>
                    <td>
                        <form action="/cart/saveForLater/{{$item->id}}" method="POST">
                        @csrf
                                <button type="submit"><i class="fas fa-heart"></i></button>
                        </form>
                    </td>
                        
                    <td>
                        <form action="/cart/{{$item->rowId}}" method="POST">
                        @csrf
                        {{ method_field('DELETE') }}
                                <button type="submit"><i class="fas fa-recycle"></i></button>
                        </form>
                    </td>


                    
                    </td>
                    <!-- <td>
                    </td> -->
                </tr>
                
              
                @endforeach

                </tbody>
            </table>



            <div class="row p-b-40">
                <div class="col-12 col-md-4 alignright">
                    <div class="paper-block">
                        <h4>Total</h4>
                        <table class="table table-striped tabs-vertical">
                            <tbody>
                            <tr>
                                <th>Total HT</th>
                                <td><span class="price">{{ Cart::subtotal() }} DHs</span>
                                </td>
                            </tr>
                            <tr>
                                <th>TVA & autres taxes</th>
                                <td><span class="price">{{ Cart::tax() }} DHs</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Total TTC</th>
                                <td><span class="price">{{ Cart::total() }} DHs</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <input class="btn btn-success btn-block btn-lg" value="Passer la commande"
                               type="submit">
                    </div>
                </div>

                <div class="col-12 col-md-4 alignright">
                <!--
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
                    </div> -->
                    <div class="mt-4">
                        <button type="button" class="btn btn-outline-secondary ">Continuer vos achats</button>
                    </div>
                </div> 


            @else

            <h4>Pas d' éléments dans votre pannier !</h4>

            
            <div class="mt-4">
                    <a href="/" type="button" class="btn btn-outline-secondary ">Continuer vos achats</a>
            </div>
            @endif

                


                
            </div>
        </div>
    </div>
</div>


@endsection