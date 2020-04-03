@extends('layouts.app')
<title>Edit Colection</title>
@section('content')
    @if(Auth::check())
    @if(Auth::user()->tieneRol('Administrador'))
        <section class="portfolio-block contact">
            <div class="container">
                <div class="heading">
                    <h2>EDIT COLECTION</h2>
                </div>
                <form method="post" action="{{ url('/colecciones',$coleccion->id) }}">
                    {{ csrf_field() }}
                    {{method_field('PATCH')}}
                    <div class="form-group"><label for="name">Nombre</label><input class="form-control item" type="text" id="nombre" name="nombre" value="{{$coleccion->nombre}}"></div>
                    <div class="form-group"><label for="message">Descripción</label><textarea class="form-control item" id="descripcion" name="descripcion" >{{$coleccion->descripcion}}</textarea></div>
                    <div class="form-group"><button class="btn btn-primary btn-lg" type="submit" style="margin-right: 31px;margin-left: 100px;">Save Colections</button><a class="btn btn-secondary btn-lg" role="button" href="#">Cancelar</a></div>
                </form>
            </div>
        </section>
    @else
    <section class="portfolio-block hire-me">
            <!-- Start: Mobile App White -->
            <section class="portfolio-block mobile-app" style="margin-top: -86px;">
                <div class="container align-items-center">
                    <div class="row align-items-center" style="background-color: rgba(0,11,31,0.16);width: 1126px;height: 427px;margin: 1px;margin-left: -7px;">
                        <div class="col">
                            <h1 class="text-center" style="font-family: Armata, sans-serif;"><strong>404 &nbsp; | &nbsp; Not Found</strong>&nbsp;</h1>
                            <h1 class="text-center" style="font-family: Armata, sans-serif;"><strong>No se encontró la página solicitada</strong></h1>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End: Mobile App White -->
        </section>
    @endif
    @else
    <section class="portfolio-block hire-me">
            <!-- Start: Mobile App White -->
            <section class="portfolio-block mobile-app" style="margin-top: -86px;">
                <div class="container align-items-center">
                    <div class="row align-items-center" style="background-color: rgba(0,11,31,0.16);width: 1126px;height: 427px;margin: 1px;margin-left: -7px;">
                        <div class="col">
                            <h1 class="text-center" style="font-family: Armata, sans-serif;"><strong>404 &nbsp; | &nbsp; Not Found</strong>&nbsp;</h1>
                            <h1 class="text-center" style="font-family: Armata, sans-serif;"><strong>No se encontró la página solicitada</strong></h1>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End: Mobile App White -->
        </section>
    @endif
@endsection
