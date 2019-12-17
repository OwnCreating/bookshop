@extends('layout.template')

@section('title', 'Detail')

@section('content')

<div class="container">
    <!-- Items -->
    <div class="card col-sm-6 col-md-12 py-2 m-3 shadow text-dark text-justify">
        <div class="row justify-content-around no-gutters">
            <div class="col-md-3 text-center">
                <img src="{{$product->images}}" width="265px" height="280px" alt="img">
            </div>
            <div class="col-md-9">
                <div class="card-body">
                    <h4 class="card-title">Title: {{$product->title}}</h4>
                    <p class="card-text">Description: {{$product->description}}</p>
                    <p>Price: {{$product->price}}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Items -->
</div>

@endsection
