@extends('layouts.app')
<title>Photographies</title>
@section('content')
        <section class="portfolio-block project">
            <div class="container">
                <!-- Start: portfolio heading -->
                <div class="heading">
                    <h2>{{ $fotografia->nombre }}&nbsp;</h2>
                </div>
                <!-- End: portfolio heading -->
                <div class="image" style="background-image:url('{{ asset('storage').'/'.$fotografia->ruta}}');background-size: cover;background-position: center;height: 520px;"></div>
                @if(Auth::check())
                <div class="row" style="height: 100px">
                    <form class="myForm" method="post" action="{{url('/fotografias/guardar', $fotografia->id)}}">
                        {{ csrf_field() }}
                    <button class="btn btn-danger btn-lg" href="" type="submit" style="margin-left: -470px;margin-bottom: 31px;margin-top: -24px;">Save Photo</button>
                    </form>
                </div>
                @endif
                <div class="row">
                    <div class="col-12 col-md-6 offset-md-1 info">
                        <h3>Description</h3>
                        <p>{{ $fotografia->descripcion }}</p>
                    </div>
                    <div class="col-12 col-md-3 offset-md-1 meta">
                        <div class="tags">
                            <span class="meta-heading">Tags</span>
                            @if(count($etiquetas))
                            @foreach($etiquetas as $etiqueta)
                                <a href="{{action('EtiquetaController@show', $etiqueta->id)}}">{{$etiqueta->nombre}}</a>
                            @endforeach
                            @else
                            @endif
                            <span class="meta-heading">Location</span><span>{{ $fotografia->ubicacion }}</span>
                            <span class="meta-heading">Date</span><span>{{ $fotografia->fecha }}</span>
                        </div>
                    </div>
                </div>
                <div class="more-projects">
                    <h3 class="text-center">More Photos</h3>
                    <div class="row gallery">
                        @if($masFotos->count())
                        @foreach($masFotos as $foto)
                        <div class="col-md-4 col-lg-3">
                            <div class="item"><a href="{{action('FotografiaController@show', $foto->id)}}"><img class="img-fluid scale-on-hover" src="{{ asset('storage').'/'.$foto->ruta}}"></a></div>
                        </div>
                        @endforeach
                        @else
                        NO HAY MAS FOTOS
                        @endif
                    </div>
                </div>
            </div>
        </section>
@endsection