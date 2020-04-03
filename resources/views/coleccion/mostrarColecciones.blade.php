@extends('layouts.app')
<title>Colections</title>
@section('content')
        <section class="portfolio-block projects-cards">
            <div class="container">
                <!-- Start: portfolio heading -->
                <div class="heading">
                    <h2>COLECTIONS</h2>
                </div>
                @if(Auth::check())
                @if(Auth::user()->tieneRol('Administrador'))
                <a class="btn btn-success" role="button" style="margin-bottom: 16px;margin-top: -51px;margin-left: 25px;font-size: 28px;" href="{{ url('/colecciones/administrar') }}">Manage Colections</a>
                @else
                @endif
                @endif
                <!-- End: portfolio heading -->
                <div class="row">
                    @if(count($coleccionEtiquetas))  
                    @foreach($coleccionEtiquetas as $dupla) 
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0"><a href="{{action('ColeccionController@show', $dupla[0]->id)}}">
                            @if($dupla[2] == [])
                            <img class="card-img-top scale-on-hover" src="/assets/img/portada2Colection.png?h=d679710e5ce8e4c2db35fde74a78a924" alt="Card Image"></a>
                            
                            @else
                            <img class="card-img-top scale-on-hover" src="/assets/img/portada2Colection.png?h=d679710e5ce8e4c2db35fde74a78a924" alt="Card Image"></a>
                            @endif
                            <div class="card-body">
                                <h6><a href="{{action('ColeccionController@show', $dupla[0]->id)}}">{{$dupla[0]->nombre}}</a></h6>
                                <p class="text-muted card-text">{{$dupla[0]->descripcion}}</p>
                                @if($dupla[1]->count())
                                    @foreach($dupla[1] as $etiqueta)
                                    <a href="{{action('EtiquetaController@show', $etiqueta->id)}}" class="badge badge-secondary">{{ $etiqueta->nombre }}</a>
                                    @endforeach
                                @else
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach 
                    @else
                    <div>No hay Colecciones</div>
                    @endif
                </div>
            </div>
        </section>
@endsection