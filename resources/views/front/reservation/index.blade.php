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
                                    <h2>Reservations List</h2>
                                </div>
                            </div>

                            {{-- @if (count($reservations) > 0) --}}
                                @foreach ($reservations as $reservation)
                                <div class="col-sm-12 col-md-6">
                                       <div class="reservation-item my-2">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="w-25 px=2">
                                                        <img src="{{ $reservation->dress_image }}" alt=""
                                                            class="w-100">

                                                    </div>
                                                    <div class="w-75 p-3">
                                                        <h5 class="card-title">{{ $reservation->dress_name }}</h5>
                                                        <h6>{{ $reservation->price }}</h6>
                                                        <p class="card-text">
                                                            {{ Str::words($reservation->dress_description, 15, '...') }}
                                                        </p>
                                                        {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @endforeach
                                    <div class="row">{{ $reservations->links('pagination::bootstrap-5') }}</div>
                            {{-- @else
                                <div class="alert alert-warning" role="alert">
                                    No reservations
                                </div>
                            @endif --}}


                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
