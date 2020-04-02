@extends('layouts.app')

@section('content')
    @if(Auth::check())
    @if(Auth::user()->tieneRol('Administrador'))
        <!-- Amsify Plugin -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/css/amsify.suggestags.css') }}">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<script type="text/javascript" src="{{asset('plugins/js/jquery.amsify.suggestags.js')}}"></script>


        <section class="portfolio-block contact">
            <div class="container">
                <div class="heading">
                    <h2>CREATE&nbsp;Colection</h2>
                </div>
                <form method="post" action="{{ url('/colecciones') }}">
                {{ csrf_field() }}
                    <div class="form-group"><label for="name">Name</label><input class="form-control item" type="text" id="nombre" name="nombre" placeholder="Ejemplo: Araucaria Milenaria"></div>
                    <div class="form-group"><label for="subject">Tags</label>
                        <input type="text" class="form-control" name="etiqueta"/>
    
                        <script type="text/javascript">
                        $('input[name="etiqueta"]').amsifySuggestags();
                        </script>
                    </div>
                    <div class="form-group"><label for="message">Description</label><textarea class="form-control item" id="descripcion" name="descripcion" rows="3"></textarea></div>
                    <div class="form-group"><button class="btn btn-primary btn-lg" type="button" onClick="submit();" style="margin-right: 31px;margin-left: 100px;">Upload Colection</button><a class="btn btn-secondary btn-lg" role="button" href="{{ url('/colecciones') }}">Cancel</a></div>
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