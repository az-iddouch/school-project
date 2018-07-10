@extends('dashboard.master') @section('content')
<aside class="main-sidebar fixed offcanvas shadow">
    <section class="sidebar">
        <div class="user-panel">
            <div class="image float-left">
                <img class="user_avatar" src="{{asset('/images/avatar.png')}}" alt="User Image">
            </div>
            <div class="info">
                <h6 class="p-t-10">Alexander Pierce</h6>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="treeview">
                <a href="#">
                    <i class="fas fa-tachometer-alt"></i> <span>Dashboard</span> <i class="icon icon-angle-left pull-right"></i>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="icon icon-package blue-text"></i>
                    <span>mes Commandes</span>
                    <span class="badge badge-primary pull-right">4</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="icon icon-package blue-text"></i>
                    <span>changer le mote de passe</span>
                    <span class="badge badge-primary pull-right">4</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="icon icon-package blue-text"></i>
                    <span>gerer mon compte</span>
                    <span class="badge badge-primary pull-right">4</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="icon icon-package blue-text"></i>
                    <span>mes commentaires</span>
                    <span class="badge badge-primary pull-right">4</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="icon icon-package blue-text"></i>
                    <span>mes favourits</span>
                    <span class="badge badge-primary pull-right">4</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="icon icon-package blue-text"></i>
                    <span>Products</span>
                    <span class="badge badge-primary pull-right">4</span>
                </a>
            </li>

    </section>
</aside>
<!--Sidebar End-->

<!-- partial -->

<div class="page light offcanvas-page">
    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <div class="search-bar">
                    <input class="transparent s-24 text-white b-0 font-weight-lighter w-128 height-50" type="text" placeholder="start typing...">
                </div>
                <!-- <a href="#" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-expanded="false"
                   aria-label="Toggle navigation" class="paper-nav-toggle paper-nav-white active "><i></i></a> -->
            </div>
        </div>
    </div>
    <div>
        <header class="blue accent-3 relative">
            <div class="navbar navbar-expand navbar-dark d-flex justify-content-end bd-navbar">
                <ul class="navbar-nav p-t-10">
                    <!-- Messages Dropdown-->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-comment"></i>
                            <span class="badge badge-success badge-mini rounded-circle">4</span>
                        </a>
                        <ul class="dropdown-menu width-250 p-0 dropdown-menu-right b-0 shadow1">
                            <li class="p-2 b-b"><span class="s-12"><i class="icon-message"></i> You have 4 messages </span></li>
                            <li>
                                <div class="slimScroll" data-height="225">
                                    <ul class="list-unstyled p-3">
                                        <li class="media">
                                            <img class="mr-3 w-15" src="assets/img/dummy/u1.png" alt="">
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-0 font-weight-normal s-14">Doe Joe</h6>
                                                <small class="s-12"> 7 minutes ago</small>
                                            </div>
                                        </li>
                                        <li class="media my-4">
                                            <img class="mr-3 w-15" src="assets/img/dummy/u2.png" alt="">
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-0 font-weight-normal s-14">Doe Joe</h6>
                                                <small class="s-12"> 7 minutes ago</small>
                                            </div>
                                        </li>
                                        <li class="media my-4">
                                            <img class="mr-3 w-15" src="assets/img/dummy/u3.png" alt="">
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-0 font-weight-normal s-14">Doe Joe</h6>
                                                <small class="s-12"> 7 minutes ago</small>
                                            </div>
                                        </li>
                                        <li class="media my-4">
                                            <img class="mr-3 w-15" src="assets/img/dummy/u4.png" alt="">
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-0 font-weight-normal s-14">Doe Joe</h6>
                                                <small class="s-12"> 7 minutes ago</small>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                            <li class="p-1 b-t text-center"><a class="s-12" href="#">See All Messages</a></li>
                        </ul>
                    </li>
                    <!-- Notification Dropdown-->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-bell"></i>
                            <span class="badge badge-danger badge-mini rounded-circle">4</span>
                        </a>
                        <ul class="dropdown-menu width-250 p-0 dropdown-menu-right b-0 shadow1">
                            <li class="p-2 b-b"><span class="s-12"><i class="icon-notifications text-danger"></i>You have 5 notifications </span></li>
                            <li>
                                <div class="slimScroll" data-height="225">
                                    <ul class="list-unstyled list-group list-group-striped">
                                        <li class="p-2">
                                            <a href="#" class="s-12">
                                                <i class="icon-data_usage text-blue"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li class="p-2">
                                            <a href="#" class="s-12">
                                                <i class="icon-data_usage text-success"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li class="p-2">
                                            <a href="#" class="s-12">
                                                <i class="icon-data_usage text-danger"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li class="p-2">
                                            <a href="#" class="s-12">
                                                <i class="icon-data_usage text-yellow"></i> 5 new members joined today
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                            <li class="p-1 b-t text-center"><a class="s-12" href="#">See All Messages</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="container-fluid text-white">
                <div class="row p-t-b-10 ">
                    <div class="col">
                        <h4>
                            Dashboard
                        </h4>
                    </div>
                </div>
                <div class="row ">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link active s-12" href="#">Aujourd'hui</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link s-12" href="#">Cette semaine</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link s-12" href="#">ce mois</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link s-12" href="#">tout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <div class="container-fluid">

            <div class="row p-t-b-20">
                <div class="col-md-6">
                    <div class="card no-b">
                        <div class="card-header white b-0 p-3">
                            <div class="card-handle">
                                <a data-toggle="collapse" href="#salesCard" aria-expanded="false" aria-controls="salesCard">
                                    <i class="icon-menu"></i>
                                </a>
                            </div>
                            <h4 class="card-title">Commentaires</h4>
                            <small class="card-subtitle mb-2 text-muted">Items purchase by users.</small>
                        </div>
                        <div class="collapse show" id="salesCard">
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover earning-box">
                                        <thead class="bg-light">
                                            <tr>
                                                <th>Service</th>
                                                <th>commentaire</th>
                                                <th>Date</th>
                                                <th>Note</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="w-10">
                                                    carte visite
                                                </td>
                                                <td>
                                                    <h6>Lorem ipsum dolor sit amet...</h6>
                                                    <small class="text-muted">apprové</small>
                                                </td>
                                                <td>12/06/2017</td>
                                                <td>4</td>
                                            </tr>
                                            <tr>
                                                <td class="w-10">
                                                    flayer
                                                </td>
                                                <td>
                                                    <h6>Lorem ipsum dolor sit amet...</h6>
                                                    <small class="text-muted">apprové</small>
                                                </td>
                                                <td>12/06/2017</td>
                                                <td>4</td>
                                            </tr>
                                            <tr>
                                                <td class="w-10">
                                                    carte visite
                                                </td>
                                                <td>
                                                    <h6>Lorem ipsum dolor sit amet...</h6>
                                                    <small class="text-muted">apprové</small>
                                                </td>
                                                <td>12/06/2017</td>
                                                <td>4</td>
                                            </tr>
                                            <tr>
                                                <td class="w-10">
                                                    carte visite
                                                </td>
                                                <td>
                                                    <h6>Lorem ipsum dolor sit amet...</h6>
                                                    <small class="text-muted">apprové</small>
                                                </td>
                                                <td>12/06/2017</td>
                                                <td>4</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card no-b">
                        <div class="card-header white b-0 p-3">
                            <div class="card-handle">
                                <a data-toggle="collapse" href="#invoiceCard" aria-expanded="false" aria-controls="invoiceCard">
                                    <i class="icon-menu"></i>
                                </a>
                            </div>
                            <h4 class="card-title">Commandes</h4>
                            <small class="card-subtitle mb-2 text-muted">Items purchase by users.</small>
                        </div>
                        <div class="collapse show" id="invoiceCard">
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table id="recent-orders" class="table table-hover mb-0 ps-container ps-theme-default">
                                        <thead class="bg-light">
                                            <tr>
                                                <th># de commande</th>
                                                <th># de service</th>
                                                <th>nom de service</th>
                                                <th>état</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>PAP-10521</td>
                                                <td><a href="#">INV-281281</a></td>
                                                <td>Carte visite</td>
                                                <td><span class="badge badge-success">Envoyé</span></td>
                                                <td>$ 1228.28</td>
                                            </tr>
                                            <tr>
                                                <td>PAP-532521</td>
                                                <td><a href="#">INV-01112</a></td>
                                                <td> carte visite</td>
                                                <td><span class="badge badge-warning">en cours</span>
                                                </td>
                                                <td>$ 5685.28</td>
                                            </tr>
                                            <tr>
                                                <td>PAP-05521</td>
                                                <td><a href="#">INV-281012</a></td>
                                                <td>flayer</td>
                                                <td><span class="badge badge-success">Envoyé</span></td>
                                                <td>$ 152.28</td>
                                            </tr>
                                            <tr>
                                                <td>PAP-15521</td>
                                                <td><a href="#">INV-281401</a></td>
                                                <td>flayer</td>
                                                <td><span class="badge badge-success">Envoyé</span></td>
                                                <td>$ 1450.28</td>
                                            </tr>
                                            <tr>
                                                <td>PAP-532521</td>
                                                <td><a href="#">INV-01112</a></td>
                                                <td>papier en-tete</td>
                                                <td><span class="badge badge-warning">en cours</span>
                                                </td>
                                                <td>$ 5685.28</td>
                                            </tr>
                                            <tr>
                                                <td>PAP-05521</td>
                                                <td><a href="#">INV-281012</a></td>
                                                <td>invitations</td>
                                                <td><span class="badge badge-success">Envoyé</span></td>
                                                <td>$ 152.28</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- partial:panel-partials/_foot.html -->

</div>
<!--End Page page_wrrapper -->
<!-- partial:_scripts.html -->

@endsection