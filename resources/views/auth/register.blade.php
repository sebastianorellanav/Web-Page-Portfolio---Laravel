@extends('layouts.app')
<title>Register</title>
@section('content')
    <!-- Start: Registration Form with Photo -->
    <div class="register-photo">
        <!-- Start: Form Container -->
        <div class="form-container" style="margin-top: 72px;">
            <!-- Start: Image -->
            <div class="image-holder" style="background-image: url(&quot;/assets/img/LRM_EXPORT_20200216_193708.jpg?h=a57b445a55f5aecf26a588beafd8f595&quot;);background-size: cover;background-position: center;"></div>
            <!-- End: Image -->
            <form method="post">
                <h2 class="text-center"><strong>Create</strong> an account.</h2>
                
                <div class="form-group"><input class="form-control @error('name') is-invalid @enderror" type="text" name="name" placeholder="Name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>

                <div class="form-group"><input class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>

                <div class="form-group"><input class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" type="password" placeholder="Password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror</div>
                
                <div class="form-group"><input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Password (repeat)">

                </div>
                
                <div class="form-group">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox">I agree to the license terms.</label></div></div>

                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background-color: #19242c;">Sign Up</button></div><a class="already" href="#">You already have an account? Login here.</a></form>
        </div>
        <!-- End: Form Container -->
@endsection