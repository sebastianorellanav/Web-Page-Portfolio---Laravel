@extends('layouts.app')
<title>Photographies</title>
@section('content')
        <section class="portfolio-block projects compact-grid">
            <!-- Start: portfolio heading -->
            <div class="heading">
                <h2>ALL FOTOGRAPHIES</h2>
            </div>
            @if(Auth::check())
            @if(Auth::user()->tieneRol('Administrador'))
            <a class="btn btn-success" role="button" style="margin-bottom: 16px;margin-top: -51px;margin-left: 25px;font-size: 28px;" href="{{ url('/fotografias/administrar') }}">Manage Photos</a>
            @else
            @endif
            @endif
            <!-- End: portfolio heading -->
            <div class="row no-gutters">
                @if($fotografias->count())  
                @foreach($fotografias as $fotografia)   
                <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="{{action('FotografiaController@show', $fotografia->id)}}"><img class="img-fluid image" src="{{ asset('storage').'/'.$fotografia->ruta}}"><span class="description"><span class="description-heading">{{$fotografia->nombre}}</span><span class="description-body">{{$fotografia->descripcion}}</span></span></a></div>
                @endforeach 
                @else
                <div class="row">No hay fotografias</div>
                @endif
            </div>
        </section>
@endsection