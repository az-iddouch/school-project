@extends('dashboard.master')

@section('content')
<div class="container-fluid">
    <div class="row p-t-b-20 justify-content-md-center">
        <div class="col-o col-md-6">
            <div class="card no-b">
                <div class="card-header white b-0 p-3">
                    <div class="card-handle">
                        <a data-toggle="collapse" href="#salesCard" aria-expanded="false" aria-controls="salesCard">
                            <i class="icon-menu"></i>
                        </a>
                    </div>
                    <h4 class="card-title">les favoris</h4>
                    <small class="card-subtitle mb-2 text-muted">les éléments favorisés par vous ...</small>
                </div>
                <div class="collapse show" id="salesCard">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover earning-box">
                                <thead class="bg-light">
                                    <tr>
                                        <th>id</th>
                                        <th>nom de service</th>
                                        <th>details</th>
                                        <th>
                                            
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach(Auth::user()->favs as $service)
                                    <tr>
                                        <td class="w-10">
                                            {{$service->id}}
                                        </td>
                                        <td>
                                            <a href="/services/{{$service->id}}">{{$service->name}}</a>
                                        </td>
                                        <td>
                                            {{$service->discription}}
                                        </td>
                                        <td>
                                            <a href="/delete/{{$service->id}}" onClick="event.preventDefault(); document.getElementById('delete-fav').submit();"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                        <form id="delete-fav" action="/delete/{{$service->id}}" method="post">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        </form>
                                    </tr>
                                    @endforeach
                                  
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
@endsection






