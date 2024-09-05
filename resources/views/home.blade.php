@extends('layouts.app')

@section('content')
    <header class="py-5 home-slider-container"
        style="/* background: url({{ asset('assets/images/banner2.jpg') }}); background-size: 100% 100%; background-position: center; background-repeat: no-repeat;*/">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Shop in style</h1>
                <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
            </div>
        </div>
    </header>


    <div class="container ">
        <div class="section ">
            <div class="main-content">
                <div class="dress-list-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-heading">
                                    <h2>Latest Products</h2>
                                    <a href="{{ route('front.dress.index') }}">view all dresss <i
                                            class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="dress-item">
                                    <a href="#"><img src="{{ asset('assets/images/carousel-1.jpg') }}"
                                            alt=""></a>
                                    <div class="down-content">
                                        <a href="#">
                                            <h4>Tittle goes here</h4>
                                        </a>
                                        <h6>$25.75</h6>
                                        <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla
                                            aspernatur.</p>
                                        <!-- <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                              </ul> -->
                                        <a href="#"><span>View Details <i class="fa fa-angle-right"></i> </span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="dress-item">
                                    <a href="#"><img src="{{ asset('assets/images/carousel-1.jpg') }}"
                                            alt=""></a>
                                    <div class="down-content">
                                        <a href="#">
                                            <h4>Tittle goes here</h4>
                                        </a>
                                        <h6>$30.25</h6>
                                        <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla
                                            aspernatur.</p>
                                        <!-- <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                              </ul> -->
                                        <a href="#"><span>View Details <i class="fa fa-angle-right"></i> </span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="dress-item">
                                    <a href="#"><img src="{{ asset('assets/images/carousel-1.jpg') }}"
                                            alt=""></a>
                                    <div class="down-content">
                                        <a href="#">
                                            <h4>Tittle goes here</h4>
                                        </a>
                                        <h6>$20.45</h6>
                                        <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla
                                            aspernatur.</p>
                                        <!-- <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                              </ul> -->
                                        <a href="#"><span>View Details <i class="fa fa-angle-right"></i> </span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="dress-item">
                                    <a href="#"><img src="{{ asset('assets/images/carousel-1.jpg') }}"
                                            alt=""></a>
                                    <div class="down-content">
                                        <a href="#">
                                            <h4>Tittle goes here</h4>
                                        </a>
                                        <h6>$15.25</h6>
                                        <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla
                                            aspernatur.</p>
                                        <!-- <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                              </ul> -->
                                        <a href="#"><span>View Details <i class="fa fa-angle-right"></i> </span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="dress-item">
                                    <a href="#"><img src="{{ asset('assets/images/carousel-1.jpg') }}"
                                            alt=""></a>
                                    <div class="down-content">
                                        <a href="#">
                                            <h4>Tittle goes here</h4>
                                        </a>
                                        <h6>$12.50</h6>
                                        <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla
                                            aspernatur.</p>
                                        <!-- <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                              </ul> -->
                                        <a href="#"><span>View Details <i class="fa fa-angle-right"></i> </span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="dress-item">
                                    <a href="#"><img src="{{ asset('assets/images/carousel-1.jpg') }}"
                                            alt=""></a>
                                    <div class="down-content">
                                        <a href="#">
                                            <h4>Tittle goes here</h4>
                                        </a>
                                        <h6>$22.50</h6>
                                        <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla
                                            aspernatur.</p>
                                        <!-- <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                              </ul> -->
                                        <a href="#"><span>View Details <i class="fa fa-angle-right"></i> </span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
@endsection
