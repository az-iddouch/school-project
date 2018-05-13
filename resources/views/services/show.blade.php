@extends('layouts.master')

@section('content')


 <div class="single-product-detail">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <div class="demo">



                          <!-- vue js slider component -->





                        </div>
                    </div>
                    <!--column-6-->
                    <div class="col-12 col-lg-6 mx-md-auto">
                        <div class="single-product-overview p-t-b-40">
                            <h2>{{ $service->name }}</h2>
                            <ul class="review p-t-b-20">
                                <li class="ratings-stars"><i class="far fa-star text-light-blue"></i>
                                    <i class="far fa-star text-light-blue"></i>
                                    <i
                                            class="far fa-star text-light-blue"></i> <i
                                            class="far fa-star text-light-blue"></i>
                                    <i class="far fa-star"></i>
                                    <span>  15 Review(s)  |  <a href="#">Noter ce produit</a></span>&#x2003;
                                </li>
                            </ul>
                            <p class="no-mar">{{ $service->discription }}</p>
                            <ul class="product-description mt-35 mb-35 iconList">
                                <li><i class="fas fa-exclamation"></i> Note general apropos de service</li>
                              
                            </ul>

                            <!-- still need work here -->
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Plastification</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                            <div class="cart-options"> <span href="#" class="price"><span>{{ $service->default_price }} DHs</span></span>
                                <div class="cart-buttons">
                                    <div class="quantity"><span class="xv-qyt xv-qup" data-value="1">+</span>
                                        <span class="xv-qyt xv-down"
                                              data-value="-1">-</span>
                                        <input step="20" min="50" max="10000" name="quantity"
                                               value="{{$service->default_quantity}}" title="Qty" class="input-text qty text" size="4" type="number">
                                    </div>
                                    <span>

                                         <a class="btn btn-lg btn-primary">ADD TO CART</a>

                                     </span>
                                </div>
                                <!--cart-buttons-->
                            </div>
                            <!--cart-options-->
                        </div>
                        <!--single-product-overview-->
                    </div>
                    <!--column-6-->
                </div>
                <!--single-product-detail-->
                <div class="row p-t-b-80">
                    <div class="col-12 col-lg-12 ">
                        <div class="product-tabs">
                            <ul class="nav nav-tabs">
                                <li class=" nav-item"><a href="#one-2" data-toggle="tab" class="nav-link active">Description</a>
                                </li>
                                <li class="nav-item"><a href="#two-2" data-toggle="tab"
                                                        class="nav-link">Specification</a>
                                </li>
                                <li class="nav-item"><a href="#three-2" data-toggle="tab" class="nav-link">Return
                                    Info</a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in show active" id="one-2">
                                    <p>{{ $service->discription }}</p>
                                    
                                </div>
                                <div class="tab-pane fade" id="two-2">
                                    <ul class="iconList">
                                        <li>5.5-inch (diagonal) LED-backlit widescreen Multi-Touch</li>
                                        <li>A8 chip with 64-bit architecture</li>
                                        <li>1080p HD video recording (30 fps or 60 fps)</li>
                                        <li>M8 motion coprocessor</li>
                                        <li>Full sRGB standard</li>
                                        <li>Slo-mo video (120 fps or 240 fps)</li>
                                        <li>Touch ID fingerprint identity sensor built into the Home button</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="three-2">Proin gravida nibh vel velit auctor aliquet.
                                    Aenean sollicitudin, nec
                                    sagittis sem lorem quis bibe dum auctor, nisi elit consequat ipsum, nec
                                    sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus
                                    a nec sagittis sem sit amet mauris. Morbi accumsan ipsum velit. Nam nec
                                    tellus a odio tincidunt auctor a ornare odio. Proin gravida nibh vel velit
                                    auctor aliquet. Aenean sollicitudin, nec sagittis sem lorem quis bibe dum
                                    auctor.
                                </div>
                            </div>
                            <!--tab-pane-->
                        </div>
                    </div>
                    <!--column-->
                </div>
                <div class="row clearfix">

                </div>
            </div>



@endsection

