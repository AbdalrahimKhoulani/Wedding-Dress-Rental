@extends('layouts.app')
@section('content')
    <div class="container dress-list-container">
        <div class="section">
            <div class="main-content">
                <div class="dress-list-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-heading">
                                    <h2>Dresses List</h2>
                                </div>
                            </div>

                            @foreach ($dresses as $dress)
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

                            <div class="row">{{ $dresses->links('pagination::bootstrap-5') }}</div>


                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
