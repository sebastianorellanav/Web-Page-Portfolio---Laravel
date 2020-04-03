@extends('layouts.app')
<title>Tags</title>
@section('content')
        <section class="portfolio-block cv">
            <div class="container">
                <div class="education group">
                    <div class="heading">
                        <h2 class="text-center d-lg-flex justify-content-lg-start" style="margin-bottom: 16px;">{{$etiqueta->nombre}}:</h2>
                        <h2 class="text-center">COLECTIONS</h2>
                    </div>
                    <div class="row">
                    @if(count($lista[0]))  
                    @foreach($lista[0] as $coleccion)
                        <div class="col-md-6 col-lg-4">
                            <div class="card border-0"><a href="{{action('ColeccionController@show', $coleccion->id)}}"><img class="card-img-top scale-on-hover" src="/assets/img/portada2Colection.png?h=d679710e5ce8e4c2db35fde74a78a924" alt="Card Image"></a>
                                <div class="card-body">
                                    <h6><a href="{{action('ColeccionController@show', $coleccion->id)}}">{{$coleccion->nombre}}</a></h6>
                                    <p class="text-muted card-text">{{$coleccion->descripcion}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @else
                    NO EXISTEN COLECCIONES CON ESTE TAG
                    @endif
                    </div>
                </div>
            </div>
            <div class="work-experience group">
                <div class="heading">
                    <h2 class="text-center">PHOTOS</h2>
                </div>
                <div class="row no-gutters">
                    @if(count($lista[1]))  
                    @foreach($lista[1] as $fotografia)
                    <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="{{action('FotografiaController@show', $fotografia->id)}}"><img class="img-fluid image" src="{{ asset('storage').'/'.$fotografia->ruta}}"><span class="description"><span class="description-heading" href="{{action('FotografiaController@show', $fotografia->id)}}">{{$fotografia->nombre}}</span><span class="description-body">{{$fotografia->descripcion}}</span></span></a></div>
                    @endforeach
                    @else
                    NO EXISTEN FOTOS CON ESTE TAG
                    @endif
            </div>
            </div>
        </section>
@endsection