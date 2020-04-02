@extends('layouts.app')

@section('content')
        <section class="portfolio-block cv">
            <div class="container">
                <div class="education group">
                    <div class="heading">
                        <h2 class="text-center d-lg-flex justify-content-lg-start" style="margin-bottom: 16px;">{{$etiqueta->nombre}}:</h2>
                        <h2 class="text-center">COLECTIONS</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="card border-0"><a href="#"><img class="card-img-top scale-on-hover" src="/assets/img/nature/image1.jpg?h=d679710e5ce8e4c2db35fde74a78a924" alt="Card Image"></a>
                                <div class="card-body">
                                    <h6><a href="#">Lorem Ipsum</a></h6>
                                    <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="card border-0"><a href="#"><img class="card-img-top scale-on-hover" src="/assets/img/nature/image2.jpg?h=c5fb06440e9759bec9433393cd5a9761" alt="Card Image"></a>
                                <div class="card-body">
                                    <h6><a href="#">Lorem Ipsum</a></h6>
                                    <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="card border-0"><a href="#"><img class="card-img-top scale-on-hover" src="/assets/img/nature/image3.jpg?h=3d10847c5ff6b1319937a4f817ef5f69" alt="Card Image"></a>
                                <div class="card-body">
                                    <h6><a href="#">Lorem Ipsum</a></h6>
                                    <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="work-experience group">
                <div class="heading">
                    <h2 class="text-center">PHOTOS</h2>
                </div>
                <div class="row no-gutters">
                    <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"><img class="img-fluid image" src="/assets/img/nature/image1.jpg?h=d679710e5ce8e4c2db35fde74a78a924"><span class="description"><span class="description-heading">Lorem Ipsum</span><span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span></span></a></div>
                    <div
                        class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"><img class="img-fluid image" src="/assets/img/nature/image2.jpg?h=c5fb06440e9759bec9433393cd5a9761"><span class="description"><span class="description-heading">Lorem Ipsum</span><span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span></span></a></div>
                <div
                    class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"><img class="img-fluid image" src="/assets/img/nature/image3.jpg?h=3d10847c5ff6b1319937a4f817ef5f69"><span class="description"><span class="description-heading">Lorem Ipsum</span><span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span></span></a></div>
            </div>
            </div>
        </section>
@endsection