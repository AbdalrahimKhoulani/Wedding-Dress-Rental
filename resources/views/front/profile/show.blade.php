@extends('layouts.app')
@section('content')
    <div class="row">
        <div class=" col-sm-12 col-md-6 col-lg-6">
            <div class="part">
                <div class="d-flex justify-content-center">
                    <div class="section main-content w-100">
                        <section class="py-5 auth-form-section-form">
                            <form method="POST" action="{{ route('front.profile.update', ['user_id' => Auth::id()]) }}">
                                @csrf
                                @method('PUT')

                                <input type="hidden" name="user_id" id="user_id" value="{{ Auth::id() }}">

                                <div class="row mb-3">
                                    <label for="name"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ $user->name }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control " name="email"
                                            value="{{ $user->email }}" readonly autocomplete="email">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="current_password"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Current Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="current_password" type="password"
                                            class="form-control @error('current_password') is-invalid @enderror"
                                            name="current_password" required autocomplete="new-password">

                                        @error('current_password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password-confirm"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Save') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <div class=" col-sm-12 col-md-6 col-lg-6">
            <div class="part">
                <div class="d-flex justify-content-center">
                    <div class="section main-content w-100">
                        <section class="py-5 reservations-list">
                            @if (count($latest_reservations) > 0)
                                @foreach ($latest_reservations as $reservation)
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
                                @endforeach
                                <div class="row"> <a href="{{ route('front.reservation.index') }}">view all dresss <i
                                    class="fa fa-angle-right"></i></a></div>
                            @else
                            <div class="alert alert-warning" role="alert">
                                No reservations
                            </div>
                            @endif


                        </section>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
