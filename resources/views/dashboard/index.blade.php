@extends('dashboard.master') 
@section('content')

        
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