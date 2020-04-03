@extends('layouts.app')
<title>Edit Profile</title>
@section('content')
        <section class="portfolio-block contact">
            <div class="container">
                <div class="heading">
                    <h2 style="margin-bottom: -38px;margin-top: -29px;">PROFILE</h2>
                </div>
            </div>
            <div class="container">
                <form method="post" action="{{ url('/home',$usuario->id) }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{method_field('PATCH')}}
                    <div class="form-row mb-3">
                        <div class="col-lg-4">
                            <div class="card mb-3">
                                <div class="card-body text-center shadow"><img class="rounded-circle mb-3 mt-4" src="{{ asset('storage').'/'.$usuario->photo}}" width="160" height="160">
                                    <div class="form-group text-left" style="font-size: 18px;"><input type="file" name="photo"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8"> 
                            <div class="form-row">
                                <div class="col">
                                    <div class="card shadow mb-3">
                                        <div class="card-header py-3">
                                            <h4 class="small font-weight-bold" style="margin-bottom: 4px;font-size: 18px;">User Settings</h4>
                                        </div>
                                        <div class="card-body">
                                            <form>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group"><label for="username"><strong>Username</strong></label><input class="form-control" type="text" value="{{$usuario->name}}" name="name"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group"><label for="email"><strong>Email Address</strong></label><input class="form-control" type="email" value="{{$usuario->email}}" name="email"></div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group"><label for="first_name"><strong>First Name</strong></label><input class="form-control" type="text" value="{{$usuario->firstName}}" name="firstName"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group"><label for="last_name"><strong>Last Name</strong></label><input class="form-control" type="text" value="{{$usuario->lastName}}" name="lastName"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group"><label for="address"><strong>Address</strong></label><input class="form-control" type="text" value="{{$usuario->address}}" name="address"></div>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group"><label for="city"><strong>City</strong></label><input class="form-control" type="text" value="{{$usuario->city}}" name="city"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group"><label for="country"><strong>Country</strong></label><input class="form-control" type="text" value="{{$usuario->country}}" name="country"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group"><button class="btn btn-dark btn-sm" type="submit">Save Settings</button></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    @endsection