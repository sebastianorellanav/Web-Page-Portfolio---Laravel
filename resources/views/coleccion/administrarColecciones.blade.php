@extends('layouts.app')
<title>Manage Colections</title>
@section('content')
    @if(Auth::check())
    @if(Auth::user()->tieneRol('Administrador'))
        <section class="portfolio-block cv">
            <div class="container" style="margin-top: -103px;">
                <div class="group"></div>
                <div class="hobbies group">
                    <div class="heading">
                        <h2 class="text-center">MANAGE COLECTION</h2>
                    </div>
                </div><a class="btn btn-success" role="button" style="margin-bottom: 16px;margin-top: -51px;font-size: 28px;" href="{{ url('/colecciones/create') }}">Add Colection</a>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($colecciones->count())  
                                    @foreach($colecciones as $coleccion)
                                    <tr>
                                        <td>{{$coleccion->id}}</td>
                                        <td>{{$coleccion->nombre}}</td>
                                        <td>
                                            <p>{{$coleccion->descripcion}}</p>
                                        </td>
                                        <td><a class="btn btn-primary" type="button" href="{{action('ColeccionController@edit', $coleccion->id)}}">Edit</a></td>
                                        <td><form action="{{action('ColeccionController@destroy', $coleccion->id)}}" method="POST">
                                        {{csrf_field()}}
                                        <input name="_method" type="hidden" value="DELETE"><button class="btn btn-danger" type="submit" onclick="return confirm('¿Está seguro que desea eliminar la coleccion?');">Delete</button>
                                        </form>
                                    </td>
                                    </tr>
                                    @endforeach 
                                    @else
                                    <tr>
                                    <td colspan="8">No hay registro !!</td>
                                  </tr>
                                  @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
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