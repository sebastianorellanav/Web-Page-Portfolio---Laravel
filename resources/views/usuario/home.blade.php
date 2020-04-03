@extends('layouts.app')

@section('content')
<section class="portfolio-block contact">
            <div class="container">
                <div class="heading">
                    <h2 style="margin-bottom: -38px;margin-top: -29px;">PROFILE</h2>
                </div>
            </div>
            <div class="row text-right" style="margin-right: 80px;margin-bottom: 16px;margin-top: -95px;">
                <div class="col">
                    <div><a class="btn btn-dark" type="button" href="{{action('HomeController@edit', $usuario->id)}}">Edit Profile</a></div>
                </div>
            </div>
            <div class="container">
                <div class="row mb-3">
                    <div class="col-lg-4">
                        <div class="card mb-3">
                            <div class="card-body text-center shadow"><img class="rounded-circle mb-3 mt-4" src="{{ asset('storage').'/'.$usuario->photo}}" width="160" height="160">
                                <h1 class="small font-weight-bold" style="font-size: 21px;margin-bottom: 15px;">{{$usuario->name}}</h1>
                                <h4 class="small font-weight-bold" style="margin-top: -8px;margin-bottom: 0px;font-size: 14px;">{{$usuario->email}}</h4>
                            </div>
                        </div>
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h4 class="small font-weight-bold" style="margin-bottom: 4px;font-size: 18px;">Personal Information</h4>
                            </div>
                            <div class="card-body">
                                <div>
                                    <h2 class="small font-weight-bold" style="font-size: 16px;">First Name</h2>
                                    <div style="background-color: rgba(0,0,0,0.15);">
                                        <h4 class="text-left small font-weight-bold" style="margin-bottom: 18px;background-color: rgba(0,0,0,0);margin-left: 17px;">{{$usuario->firstName}}</h4>
                                    </div>
                                </div>
                                <div>
                                    <h2 class="small font-weight-bold" style="font-size: 16px;">Last Name</h2>
                                    <div style="background-color: rgba(0,0,0,0.15);">
                                        <h4 class="text-left small font-weight-bold" style="margin-bottom: 18px;background-color: rgba(0,0,0,0);margin-left: 17px;">{{$usuario->lastName}}</h4>
                                    </div>
                                </div>
                                <div>
                                    <h2 class="small font-weight-bold" style="font-size: 16px;">Address</h2>
                                    <div style="background-color: rgba(0,0,0,0.15);">
                                        <h4 class="text-left small font-weight-bold" style="margin-bottom: 18px;background-color: rgba(0,0,0,0);margin-left: 17px;">{{$usuario->address}}</h4>
                                    </div>
                                </div>
                                <div>
                                    <h2 class="small font-weight-bold" style="font-size: 16px;">City</h2>
                                    <div style="background-color: rgba(0,0,0,0.15);">
                                        <h4 class="text-left small font-weight-bold" style="margin-bottom: 18px;background-color: rgba(0,0,0,0);margin-left: 17px;">{{$usuario->city}}</h4>
                                    </div>
                                </div>
                                <div>
                                    <h2 class="small font-weight-bold" style="font-size: 16px;">Country</h2>
                                    <div style="background-color: rgba(0,0,0,0.15);">
                                        <h4 class="text-left small font-weight-bold" style="margin-bottom: 18px;background-color: rgba(0,0,0,0);margin-left: 17px;">{{$usuario->country}}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col">
                                <div class="card shadow mb-3">
                                    <div class="card-header py-3">
                                        <h4 class="small font-weight-bold" style="margin-bottom: 4px;font-size: 18px;">Photographs you liked</h4>
                                    </div>
                                    <div class="card-body text-center" style="margin-bottom: -12px;margin-top: 2px;">
                                        <div class="row">
                                            @if($fotografias->count())
                                            @foreach($fotografias as $fotografia)
                                                <div class="col-md-6 col-lg-4 project-sidebar-card"><a href="{{action('FotografiaController@show', $fotografia->id)}}"><img class="img-fluid image scale-on-hover" src="{{ asset('storage').'/'.$fotografia->ruta}}"></a></div>
                                            @endforeach
                                            @else
                                            NO TE HA GUSTADO NINGUNA FOTO
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
