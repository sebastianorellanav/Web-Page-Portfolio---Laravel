@extends('layouts.app')

@section('content')
        <section class="portfolio-block block-intro" style="background-image: url(&quot;/assets/img/2019-01-06%2011.45.24%201.jpg?h=007403603dd26869781cd7448fe48110&quot;);background-position: center;background-size: cover;margin-bottom: 62px;padding-bottom: 7px;padding-top: 134px;height: 548px;margin-top: -5px">
            <div class="container">
                <div class="about-me">
                    <h1 class="text-center" style="font-size: 55px;color: #fefefe;font-family: Armata, sans-serif;margin-right: 28px;">Seba <strong>Orellana</strong></h1>
                    <p style="color: rgb(255,255,255);background-color: rgba(92,87,89,0.48);margin-bottom: 95px;margin-top: 19px;margin-right: 36px;">I work as interface and front end developer. I have passion for pixel perfect, minimal and easy to use interfaces.</p>
                </div>
            </div>
            <div class="container">
                @if($etiquetas->count())
                @foreach($etiquetas as $etiqueta)
                <a class="btn btn-outline-dark btn-lg" type="button" href="{{action('EtiquetaController@show', $etiqueta->id)}}" style="margin: 16px;color: rgb(174,179,184);margin-left: -5px;">{{$etiqueta->nombre}}</a>
                @endforeach
                @else
                @endif
            </div>
        </section>
        <h2 class="text-center" style="margin-left: -34px;margin-bottom: 62px;font-family: Lato, sans-serif;font-size: 32px;margin-top: 23px;"><strong>RECENT WORK</strong></h2>
        <section class="portfolio-block photography">
            <div class="container">
                <div class="row no-gutters">
                    @if($fotos->count())  
                    @foreach($fotos as $foto)
                    <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="{{action('FotografiaController@show', $foto->id)}}"><img class="img-fluid image" src="{{ asset('storage').'/'.$foto->ruta}}"></a></div>
                    @endforeach 
                    @else
                    <div class="row">No hay fotografias</div>
                    @endif
                </div>
            </div>
        </section>
        <section class="portfolio-block call-to-action border-bottom">
            <div class="container">
                <div class="d-flex justify-content-center align-items-center content">
                    <h3>Like what you see?</h3><a class="btn btn-outline-dark btn-lg" type="button" href="{{ url('/fotografias') }}" style="margin: 16px;color: rgb(0,0,0);margin-left: -19px;">See All</a></div>
            </div>
        </section>
        <section class="portfolio-block skills">
            <div class="container">
                <!-- Start: portfolio heading -->
                <div class="heading">
                    <h2>Colections</h2>
                </div>
                <!-- End: portfolio heading -->
                <div class="row">
                    @if(count($elementos))  
                    @foreach($elementos as $dupla)
                    <div class="col-md-4">
                        <div class="card border-0"><a href="{{action('ColeccionController@show', $dupla[0]->id)}}">
                            @if($dupla[2] != [])
                            <img class="card-img-top scale-on-hover" src="{{ asset('storage').'/'.$dupla[2]->ruta}}" alt="Card Image"></a>
                            @else
                            <img class="card-img-top scale-on-hover" src="" alt="Card Image"></a>
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