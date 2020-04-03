@extends('layouts.app')
<title>Search</title>
@section('content')
        <section class="portfolio-block cv">
            <div class="container">
                <div class="work-experience group">
                    <div class="heading">
                        <h2 class="text-center" style="margin-bottom: 74px;">Tags</h2>
                    </div>
                    <div></div>
                    <div class="row no-gutters" style="margin-top: -27px;">
                        @if($etiquetas->count())
                        @foreach($etiquetas as $etiqueta)
                        <button class="btn btn-outline-dark btn-lg" type="button" style="margin: 16px;color: rgb(174,179,184);">{{$etiqueta->nombre}}</button>
                        @endforeach
                        @else
                        <h6>NO EXISTEN ETIQUETAS CON ESE NOMBRE</h6>
                        @endif
                    </div>
                </div>
                <div class="work-experience group">
                    <div class="heading">
                        <h2 class="text-center">PHOTOS</h2>
                    </div>
                    <div class="row no-gutters">
                        @if($fotografias->count())
                        @foreach($fotografias as $fotografia)
                        <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"><img class="img-fluid image" src="{{ asset('storage').'/'.$fotografia->ruta}}"><span class="description"><span class="description-heading">{{$fotografia->nombre}}</span><span class="description-body">{{$fotografia->descripcion}}</span></span></a></div>
                        @endforeach
                        @else
                        <h6>NO EXISTEN FOTOGRAFIAS CON ESE NOMBRE</h6>
                        @endif
            </div>
            </div>
            <div class="education group">
                <div class="heading">
                    <h2 class="text-center">COLECTIONS</h2>
                </div>
                <div class="row">
                    @if($colecciones->count())
                    @foreach($colecciones as $coleccion)
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0"><a href="#"><img class="card-img-top scale-on-hover" src="/assets/img/portada2Colection.png?h=d679710e5ce8e4c2db35fde74a78a924" alt="Card Image"></a>
                            <div class="card-body">
                                <h6><a href="#">{{$coleccion->nombre}}</a></h6>
                                <p class="text-muted card-text">{{$coleccion->descripcion}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <h6>NO EXISTEN COLECCIONES CON ESE NOMBRE</h6>
                    @endif
                </div>
            </div>
            </div>
        </section>
@endsection