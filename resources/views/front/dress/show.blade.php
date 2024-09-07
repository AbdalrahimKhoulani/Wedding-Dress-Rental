@extends('layouts.app')
@section('content')
    <div class="section">
        <section class=" main-content">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 ">
                    <div class="col-md-6">
                        <img class="card-img-top mb-5 mb-md-0" src="{{ $dress->image }}" alt="..." />
                    </div>
                    <div class="col-md-6">
                        {{-- <div class="small mb-1">SKU: BST-498</div> --}}
                        <h1 class="display-5 fw-bolder">{{ $dress->name }}</h1>
                        <div class="fs-5 mb-5">
                            {{-- <span class="text-decoration-line-through">{{$dress->price}} $</span> --}}
                            <span>{{ $dress->price }} $</span>
                        </div>
                        <p class="lead">{{ $dress->description }}</p>
                        <div class="dress-options">
                            <div class="form-group">
                                <label for="size">Size:</label>
                                <select id="dress-size-options" class="form-control" id="size">
                                    @foreach ($dress->sizes as $dress_size)
                                        <option data-id-dress-size="{{$dress_size->pivot->id}}" value="{{ $dress_size->id }}">{{ $dress_size->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <hr>
                            <div class="form-group">
                                <button type="button" id="btn-reserve" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#reservationModal" data-id-dress="{{ $dress->id }}">Reserve</button>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="modal fade" id="reservationModal" tabindex="-1" aria-labelledby="reservationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="reservationModalLabel">{{__('Reservation date')}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" name="reservation-form" id="reservation-form" action="{{route('front.reservation.store')}}">
                <div class="modal-body">
                        @csrf
                        <input type="hidden" name="dress_id" id="dress_id" value="{{$dress->id}}">
                        <input type="hidden" name="size_id" id="size_id" value="{{$dress->id}}">
                        <input type="hidden" name="dress_size_id" id="dress_size_id" value="">
                        <div class="row mb-3">
                            <label for="to" class="col-md-4 col-form-label text-md-end">From</label>

                            <div class="col-md-6">
                                <input id="to" type="datetime-local" class="form-control " name="to" value="" required="">

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="from" class="col-md-4 col-form-label text-md-end">To</label>

                            <div class="col-md-6">
                                <input id="from" type="datetime-local" class="form-control " name="from" value="" required="">

                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Confirm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $('#reservationModal').on('show.bs.modal', function(e) {
            const size = $('#dress-size-options option:selected');
            const size_id = size.val();

            const dress_size_id = size.data('id-dress-size');
            $('#reservation-form #size_id').attr('value',size_id);
            $('#reservation-form #dress_size_id').attr('value',dress_size_id);

        });


    </script>
@endsection
