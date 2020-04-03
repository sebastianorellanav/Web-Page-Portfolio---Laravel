<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- Head -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Contact - Brand</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css?h=cf80f5249a1fb8fec0533c355e617ac1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amiko">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Antic+Slab">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Armata">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Artifika">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="/assets/fonts/fontawesome5-overrides.min.css?h=98a49735ed420ff1094cb21c75dd8271">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
    <link rel="stylesheet" href="/assets/css/styles.min.css?h=eda0701c3d6a6ef962e576af2ee2a6e0">
    <link rel="stylesheet" href="/assets/css/styles.min.css?h=7ad1c5593449c07a67aa987d69cc6b72">
        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<!-- End of Head -->

<!-- Body -->
<body>
    <!-- NavBar -->
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark portfolio-navbar gradient" style="background-color: #783304;filter: blur(0px) brightness(101%) contrast(128%) grayscale(0%) hue-rotate(360deg) saturate(180%) sepia(0%);padding-bottom: 20px;">
        <div class="container"><a class="navbar-brand logo" href="{{ url('/') }}">Home</a><button data-toggle="collapse" class="navbar-toggler text-black-50" data-target="#navbarNav"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navbarNav" style="background-color: rgba(78,3,43,0);">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/fotografias') }}" style="margin-right: -20px;">All</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/colecciones') }}" style="margin-right: -16px;">Colections</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/aboutMe') }}" style="margin-right: -15px;">About me</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/contacto') }}" style="margin-right: -17px;">Contact</a></li>

                    <li class="nav-item" role="presentation" style="margin-right: -8px;"> 
                        <form method="get" action="{{ url('/search') }}">
                            <input class="form-control-sm" href="{{action('Principal@index')}}" type="search" name="entrada" placeholder="Buscar" style="margin-right: 6px;"><i class="fa fa-search" type="submit" data-aos="fade" style="font-size: 18px;margin-left: -30px;margin-top: 10px;margin-right: -9px;color:#000b1f;"></i>
                        </form> 
                    </li>
                    
                    @guest
                        <li class="nav-item" style="margin-left: 30px">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fa fa-sign-in" type="submit" data-aos="fade" style="font-size: 25px;margin-left: 7px;margin-right: -21px;color:##ffffff;"></i> <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" style="margin-left: 30px" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" style="color:#016ed2;" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @if (Route::has('register'))
                                <a class="dropdown-item" style="color:#016ed2;" href="{{ route('register') }}">{{ __('Register')}}</a>
                            </div>
                        </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                </ul>
        
        
    </nav>
    <!-- End of navbar -->

    <!-- Main: Page Content -->
    <main class="page lanidng-page">
    @yield('content')
    </main>
    <!-- End of Main -->

    <!-- Footer -->
    <footer class="page-footer">
        <div class="container">
            <div class="links"></div>
            <div class="row">
                <div class="col" style="filter: contrast(74%);"><i class="fa fa-phone" style="font-size: 31px;"></i>
                    <h5 class="text-uppercase">Talk to us</h5>
                    <h6>+569 54695733</h6>
                </div>
                <div class="col" style="filter: contrast(74%);"><i class="fa fa-envelope-o" style="font-size: 31px;"></i>
                    <h5 class="text-uppercase">E-mail</h5>
                    <h6>sebastianorellana820@gmail.com</h6>
                </div>
                <div class="col" style="filter: contrast(74%);"><i class="fa fa-map-marker" style="font-size: 31px;"></i>
                    <h5>LOCATION</h5>
                    <h6>Santiago, Chile</h6>
                </div>
            </div>
            <div class="social-icons"><a href="https://www.facebook.com/sebastian.orellana.75286"><i class="icon ion-social-facebook"></i></a><a href="https://www.instagram.com/sebaorellana__/?hl=es"><i class="icon ion-social-instagram-outline"></i></a><a href="https://twitter.com/seba27021999"><i class="icon ion-social-twitter"></i></a></div>
            <div
                class="group"></div>
        </div>
    </footer>
    <!-- End of Footer -->

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
    <script src="/assets/js/script.min.js?h=a98ded0f8fa99fe4d1d8340d3300f1ba"></script>
</body>
<!-- End of Body -->

</html>
<!-- End of HTML -->
