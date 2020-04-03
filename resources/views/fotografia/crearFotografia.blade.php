@extends('layouts.app')
<title>Upload Photo</title>
@section('content')
    @if(Auth::check())
    @if(Auth::user()->tieneRol('Administrador'))
        <section class="portfolio-block contact">
            <div class="container">
                <div class="heading">
                    <h2>Upload Photography</h2>
                </div>
                <form method="post" action="{{ url('/fotografias') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="form-group text-left" style="font-size: 18px;"><input type="file" name="ruta"></div>
                    <div class="form-group"><label for="name">Name</label><input class="form-control item" type="text" id="nombre" name="nombre" placeholder="Ejemplo: &quot;Araucaria Milenaria&quot;"></div>
                    <div class="form-group"><label for="subject">Location</label><input class="form-control item" type="text" id="ubicacion" name="ubicacion" placeholder="Ejemplo: &quot;Sur de Chile&quot;"></div>
                    <div class="form-group"><label for="subject">Colection</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="coleccion">
                            <option selected>Choose ...</option>
                            @if($colecciones->count())  
                            @foreach($colecciones as $coleccion)  
                                <option value="{{ $coleccion->id}}">{{ $coleccion->nombre }}</option>
                            @endforeach 
                            @else
                                <option>No hay Colecciones</option>
                            @endif
                            </select>
                    </div>
                    <div class="form-group"><label for="message">Description</label><textarea class="form-control item" id="message" name="descripcion"></textarea></div>
                    <div class="form-group"><button class="btn btn-primary btn-lg" type="submit" style="margin-right: 31px;margin-left: 100px;">Upload Photography</button><a class="btn btn-secondary btn-lg" role="button" href="{{ url('/fotografias') }}">Cancel</a></div>
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