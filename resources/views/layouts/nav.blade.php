

@yield('pre-nav')

<div class="header-top hide-for-small-down">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-7">
                <ul class="top-nav">
                    <li><a href="#">Buyer Protection</a></li>
                    <li class="parent"><a href="#">Help</a>
                        <ul>
                            <li><a href="#">Help Center</a></li>
                            <li><a href="#">Open a Ticket</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Download Mobile App</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-md-5">
                <ul class="top-nav text-right">
                    <li><a href="#"><i class="icon icon-exchange"></i>Compare list</a></li>
                    <li><a href="#"><i class="icon icon-heart"></i> Wishlist</a></li>
                    <li><a href="#"><i class="icon icon-user"></i>Login</a></li>
                    <li><a href="#"><i class="icon icon-lock"></i>Register</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--top header-->
<div class="nav-fixed no-b">
    <!-- Header -->
    <nav class="mainnav navbar navbar-default justify-content-between">
       <div class="container relative">
           <a class="offcanvas dl-trigger paper-nav-toggle" type="button" data-toggle="offcanvas"
                   aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <i></i>
           </a>
           <a class="navbar-brand" href="index.html">
               <img class="d-inline-block align-top" alt="" src="/images/basic/logo.png">
           </a>
           <div class="paper_menu">
               <div id="dl-menu" class="xv-menuwrapper responsive-menu">
    <ul class="dl-menu align-items-center">
        <li class="parent megamenu"><a href="#">Produit 1 </a>
           
        </li>
        <li class="parent"><a href="#">Produit 2</a>
          
        </li>
        <li class="parent megamenu"><a href="#">Produit 3 <span class="badge badge-danger">New</span></a>
          
        </li>
        <li class="parent"><a href="#">Produit 4</a>

        </li>
        <li class="parent megamenu"><a href="#"><i class="fas fa-angle-down"></i>Autres</a>
            <ul class="lg-submenu">
                <li><a><i class="icon icon-shopping-bag2 s-24"></i>Autre produits</a>
                    <ul class="lg-submenu">
                        <li><a href="home-shop.html">Produit 5 <span class="badge badge-warning">unique</span></a>
                        </li>
                        <li><a href="shop.html">Produit 6</a>
                        </li>
                        <li><a href="shop-single.html">Produit 7<span class="badge badge-danger">hot</span></a>
                        </li>
                        <li><a href="shop-left-sidebar.html">Prduit 8</a>
                        </li>
                        <li><a href="register.html">Produit 9</a>
                        </li>
                        <li><a href="cart.html">Cart <span class="badge">11 items</span></a>
                        </li>
                        <li><a href="checkout.html">Check out</a>
                        </li>
                    </ul>
                    <a href="/home10-shop.html" class="btn btn-success">
                        <i class="icon icon-shopping-bag2 s-24"></i> Shop Now</a>
                </li>
                <li>
                    <div>
                        <div class="text-center">
                            <p><strong> Promotion de la semaines</strong> <span class="badge badge-danger">30% Off Today</span>
                            </p>
                        </div>
                        <figure>
                            <img src="/images/demo/ipad.png" alt="">
                        </figure>
                    </div>
                </li>
            </ul>
        </li>
        <li><a href="#modalLogin" data-toggle="modal" data-target="#modalLogin">
            Login
        </a>
        </li>
        <li><a href="#modalSignUp" class="btn btn-primary nav-btn" data-toggle="modal"
               data-target="#modalSignUp">Sign
            Up</a>
        </li>
    </ul>
</div>
<!-- Login modal -->
           </div>
       </div>
    </nav>
</div>