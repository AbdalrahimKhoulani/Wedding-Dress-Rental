@extends('layouts.app')
@section('content')
<div class="section">
    <section class=" main-content">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6">
                    <img class="card-img-top mb-5 mb-md-0" src="{{$dress->image}}" alt="..." />
                </div>
                <div class="col-md-6">
                    {{-- <div class="small mb-1">SKU: BST-498</div> --}}
                    <h1 class="display-5 fw-bolder">{{$dress->name}}</h1>
                    <div class="fs-5 mb-5">
                        {{-- <span class="text-decoration-line-through">{{$dress->price}} S.P</span> --}}
                        <span>{{$dress->price}} S.P</span>
                    </div>
                    <p class="lead">{{$dress->description}}</p>
                    <div class="dress-options">
                        <div class="form-group">
                            <label for="size">Size:</label>
                            <select class="form-control" id="size">
                                @foreach ($dress->sizes as $dress_size)
                                <option value="{{$dress_size->id}}">{{$dress_size->name}}</option>
                                @endforeach

                            </select>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
