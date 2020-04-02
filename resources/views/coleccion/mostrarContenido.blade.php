@extends('layouts.app')

@section('content')
        <section class="portfolio-block projects-with-sidebar">
            <div class="container">
                <!-- Start: portfolio heading -->
                <div class="heading">
                    <h2>{{$coleccion->nombre}}</h2>
                </div>
                <!-- End: portfolio heading -->
                <div class="row">
                    <div class="col-md-3">
                        <ul class="list-unstyled sidebar">
                            <li><a class="active" href="#">Tags</a></li>
                            @if($etiquetas->count())
                            @foreach($etiquetas as $etiqueta)
                            <li><a href="{{action('EtiquetaController@show', $etiqueta->id)}}">{{$etiqueta->nombre}}</a></li>
                            @endforeach
                            @else
                            <div class="row">No hay Etiquetas</div>
                            @endif
                        </ul>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            @if($fotografias->count())  
                            @foreach($fotografias as $fotografia)
                            <div class="col-md-6 col-lg-4 project-sidebar-card"><a href="{{action('FotografiaController@show', $fotografia->id)}}"><img class="img-fluid image scale-on-hover" src="{{ asset('storage').'/'.$fotografia->ruta}}"></a></div>
                            @endforeach 
                            @else
                            <div class="row">No hay fotografias en esta colección</div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection