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
                        </div>
                        <div class="row">

                            @foreach ($latest_dresses as $dress)
                                <div class="col-sm-12 col-md-6 col-lg-4">
                                    <div class="dress-item">
                                        <a href="{{ route('front.dress.show', ['id' => $dress->id]) }}">
                                            <img src="{{ $dress->image }}" alt="">
                                        </a>
                                        <div class="down-content">
                                            <div class="row">
                                                <div class="col-8 px-1">
                                                    <a href="{{ route('front.dress.show', ['id' => $dress->id]) }}">
                                                        <h4>{{ $dress->name }}</h4>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <h6>{{ $dress->price }} $</h6>
                                                </div>
                                            </div>
                                            <div>
                                                <p>{{ Str::words($dress->description, 20, '...') }}</p>
                                                <a href="{{ route('front.dress.show', ['id' => $dress->id]) }}">
                                                    <span>
                                                        View Details
                                                        <i class="fa fa-angle-right"></i>
                                                    </span>
                                                </a>
                                            </div>



                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
@endsection
