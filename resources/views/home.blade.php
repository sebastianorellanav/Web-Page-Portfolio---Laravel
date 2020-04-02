@extends('layouts.app')

@section('content')
<section class="portfolio-block contact">
            <div class="container">
                <div class="heading">
                    <h2 style="margin-bottom: -38px;margin-top: -29px;">PROFILE</h2>
                </div>
            </div>
            <div class="row text-right" style="margin-right: 32px;margin-bottom: 16px;margin-top: -95px;">
                <div class="col">
                    <div><a class="btn btn-dark" type="button" href="{{ url('/home/edit') }}">Edit Profile</a></div>
                </div>
            </div>
            <div class="container">
                <div class="row mb-3">
                    <div class="col-lg-4">
                        <div class="card mb-3">
                            <div class="card-body text-center shadow"><img class="rounded-circle mb-3 mt-4" src="dogs/image2.jpeg" width="160" height="160">
                                <h1 class="small font-weight-bold" style="font-size: 21px;margin-bottom: 15px;">User Name</h1>
                                <h4 class="small font-weight-bold" style="margin-top: -8px;margin-bottom: 0px;font-size: 14px;">e-mail</h4>
                            </div>
                        </div>
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h4 class="small font-weight-bold" style="margin-bottom: 4px;font-size: 18px;">Personal Information</h4>
                            </div>
                            <div class="card-body">
                                <h4 class="small font-weight-bold">Server migration<span class="float-right">20%</span></h4>
                                <div class="progress progress-sm mb-3">
                                    <div class="progress-bar bg-danger" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"><span class="sr-only">20%</span></div>
                                </div>
                                <h4 class="small font-weight-bold">Sales tracking<span class="float-right">40%</span></h4>
                                <div class="progress progress-sm mb-3">
                                    <div class="progress-bar bg-warning" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"><span class="sr-only">40%</span></div>
                                </div>
                                <h4 class="small font-weight-bold">Customer Database<span class="float-right">60%</span></h4>
                                <div class="progress progress-sm mb-3">
                                    <div class="progress-bar bg-primary" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"><span class="sr-only">60%</span></div>
                                </div>
                                <h4 class="small font-weight-bold">Payout Details<span class="float-right">80%</span></h4>
                                <div class="progress progress-sm mb-3">
                                    <div class="progress-bar bg-info" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"><span class="sr-only">80%</span></div>
                                </div>
                                <h4 class="small font-weight-bold">Account setup<span class="float-right">Complete!</span></h4>
                                <div class="progress progress-sm mb-3">
                                    <div class="progress-bar bg-success" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"><span class="sr-only">100%</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row mb-3 d-none">
                            <div class="col">
                                <div class="card text-white bg-primary shadow">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col">
                                                <p class="m-0">Peformance</p>
                                                <p class="m-0"><strong>65.2%</strong></p>
                                            </div>
                                            <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                        </div>
                                        <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-white bg-success shadow">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col">
                                                <p class="m-0">Peformance</p>
                                                <p class="m-0"><strong>65.2%</strong></p>
                                            </div>
                                            <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                        </div>
                                        <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card shadow mb-3">
                                    <div class="card-header py-3">
                                        <h4 class="small font-weight-bold" style="margin-bottom: 4px;font-size: 18px;">Photographs you liked</h4>
                                    </div>
                                    <div class="card-body text-center" style="margin-bottom: -12px;margin-top: 2px;">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-4 project-sidebar-card"><a href="#"><img class="img-fluid image scale-on-hover" src="/assets/img/nature/image1.jpg?h=d679710e5ce8e4c2db35fde74a78a924"></a></div>
                                            <div class="col-md-6 col-lg-4 project-sidebar-card"><a href="#"><img class="img-fluid image scale-on-hover" src="/assets/img/nature/image2.jpg?h=c5fb06440e9759bec9433393cd5a9761"></a></div>
                                            <div class="col-md-6 col-lg-4 project-sidebar-card"><a href="#"><img class="img-fluid image scale-on-hover" src="/assets/img/nature/image3.jpg?h=3d10847c5ff6b1319937a4f817ef5f69"></a></div>
                                        </div><button class="btn btn-dark" type="button" style="margin-top: 12px;">See More</button></div>
                                </div>
                                <div class="card shadow">
                                    <div class="card-header py-3">
                                        <h4 class="small font-weight-bold" style="margin-bottom: 4px;font-size: 18px;">Saved Colection</h4>
                                    </div>
                                    <div class="card-body text-center">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-4">
                                                <div class="card border-0"><a href="#"><img class="card-img-top scale-on-hover" src="/assets/img/nature/image1.jpg?h=d679710e5ce8e4c2db35fde74a78a924" alt="Card Image"></a>
                                                    <div class="card-body">
                                                        <h6><a href="#" style="color: rgb(0,11,31);">Lorem Ipsum</a></h6>
                                                        <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                <div class="card border-0"><a href="#"><img class="card-img-top scale-on-hover" src="/assets/img/nature/image2.jpg?h=c5fb06440e9759bec9433393cd5a9761" alt="Card Image"></a>
                                                    <div class="card-body">
                                                        <h6><a href="#" style="color: rgb(0,11,31);">Lorem Ipsum</a></h6>
                                                        <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                <div class="card border-0"><a href="#"><img class="card-img-top scale-on-hover" src="/assets/img/nature/image3.jpg?h=3d10847c5ff6b1319937a4f817ef5f69" alt="Card Image"></a>
                                                    <div class="card-body">
                                                        <h6><a href="#" style="color: rgb(0,11,31);">Lorem Ipsum</a></h6>
                                                        <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><button class="btn btn-dark" type="button" style="margin-top: 14px;margin-bottom: -8px;">See More</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
