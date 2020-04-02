@extends('layouts.app')

@section('content')
        <section class="portfolio-block project">
            <div class="container">
                <!-- Start: portfolio heading -->
                <div class="heading">
                    <h2>{{ $fotografia->nombre }}&nbsp;</h2>
                </div>
                <!-- End: portfolio heading -->
                <div class="image" style="background-image:url('{{ asset('storage').'/'.$fotografia->ruta}}');background-size: cover;background-position: center;height: 520px;"></div>
                <div class="row">
                    <form type="hidden" method="post" action="{{url('/fotografias/guardar', $fotografia->id)}}">
                        {{ csrf_field() }}
                    <button class="btn btn-danger btn-lg" href="" type="submit" style="margin-left: 100px;margin-bottom: 31px;margin-top: -24px;">Save Photo</button>
                    </form>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 offset-md-1 info">
                        <h3>Description</h3>
                        <p>{{ $fotografia->descripcion }}</p>
                    </div>
                    <div class="col-12 col-md-3 offset-md-1 meta">
                        <div class="tags">
                            <span class="meta-heading">Tags</span><a href="#">Resource</a><a href="#">Project</a>
                            <span class="meta-heading">Location</span><span>{{ $fotografia->ubicacion }}</span>
                            <span class="meta-heading">Date</span><span>{{ $fotografia->fecha }}</span>
                        </div>
                    </div>
                </div>
                <div class="more-projects">
                    <h3 class="text-center">More Photos</h3>
                    <div class="row gallery">
                        <div class="col-md-4 col-lg-3">
                            <div class="item"><a href="#"><img class="img-fluid scale-on-hover" src="/assets/img/nature/image2.jpg?h=c5fb06440e9759bec9433393cd5a9761"></a></div>
                        </div>
                        <div class="col-md-4 col-lg-3">
                            <div class="item"><a href="#"><img class="img-fluid scale-on-hover" src="/assets/img/nature/image3.jpg?h=3d10847c5ff6b1319937a4f817ef5f69"></a></div>
                        </div>
                        <div class="col-md-4 col-lg-3">
                            <div class="item"><a href="#"><img class="img-fluid scale-on-hover" src="/assets/img/tech/image4.jpg?h=e138a8bfe4ed72819d3bbf626d732745"></a></div>
                        </div>
                        <div class="col-md-4 col-lg-3">
                            <div class="item"><a href="#"><img class="img-fluid scale-on-hover" src="/assets/img/nature/image5.jpg?h=dfa56246a493db02797b024ba354688f"></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection