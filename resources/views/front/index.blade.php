@extends('layout.template')

@section('title', 'Home')

@section('content')

<div class="container">
        <div class="row justify-content-around">
            <!-- Items -->
            @foreach ($products as $product)              
            <div class="card col-sm-6 col-md-3 py-2 m-3 shadow align-items-center">
                {{-- @foreach (unserialize($product->images) as $image)
                    <img src="{{$image}}" width="265px" height="280px" alt="img">
                    @php
                        break;
                    @endphp
                @endforeach --}}
                <img src="{{unserialize($product->images)[0]}}" width="265px" height="280px" alt="img">

                <div class="card-body">
                    <h5 class="card-title">Title: {{$product->title}}</h5>
                    <p class="card-text limited-text">Description: {{$product->description}}</p>
                    <p class="card-text limited-text">Prince: {{$product->price}}/ks</p>
                </div>
                <p>
                    <a href="{{route('front.show', $product->id)}}" class="btn btn-primary mr-3" role="button">View Detail</a> 
                    <a href="{{route('front.add', $product->id)}}" class="btn btn-light" role="button">Add to Cart</a>
                </p>
            </div>
            @endforeach
            <!-- End Items -->
        </div>
    </div>

@endsection
