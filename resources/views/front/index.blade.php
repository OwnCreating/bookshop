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
                    <h4 class="card-title">{{$product->title}}</h4>
                    <p class="card-text limited-text">{{$product->description}}</p>
                    <p class="card-text limited-text">{{$product->price}}</p>
                </div>
                <p>
                    <a href="{{route('front.show', $product->id)}}" class="btn btn-primary mr-3" role="button">View Detail</a> 
                    <a href="#" class="btn btn-light" role="button">Add to Cart</a>
                </p>
            </div>
            @endforeach


            {{-- <div class="card col-sm-6 col-md-3 py-2 m-3 shadow align-items-center">
                <img src="/images/thumb.jpeg" width="265px" height="280px" alt="img">
                <div class="card-body">
                    <h4 class="card-title">Photo Collection</h4>
                    <p class="card-text">This is nice view</p>
                </div>
                <p>
                    <a href="#" class="btn btn-primary" role="button">View Detail</a> 
                    <a href="#" class="btn btn-light" role="button">Add to Cart</a>
                </p>
            </div>
            <div class="card col-sm-6 col-md-3 py-2 m-3 shadow align-items-center">
                <img src="/images/thumb.jpeg" width="265px" height="280px" alt="img">
                <div class="card-body">
                    <h4 class="card-title">Photo Collection</h4>
                    <p class="card-text">This is nice view</p>
                </div>
                <p>
                    <a href="#" class="btn btn-primary" role="button">View Detail</a> 
                    <a href="#" class="btn btn-light" role="button">Add to Cart</a>
                </p>
            </div>
            <div class="card col-sm-6 col-md-3 py-2 m-3 shadow align-items-center">
                <img src="/images/thumb.jpeg" width="265px" height="280px" alt="img">
                <div class="card-body">
                    <h4 class="card-title">Photo Collection</h4>
                    <p class="card-text">This is nice view</p>
                </div>
                <p>
                    <a href="#" class="btn btn-primary" role="button">View Detail</a> 
                    <a href="#" class="btn btn-light" role="button">Add to Cart</a>
                </p>
            </div>
            <div class="card col-sm-6 col-md-3 py-2 m-3 shadow align-items-center">
                <img src="/images/thumb.jpeg" width="265px" height="280px" alt="img">
                <div class="card-body">
                    <h4 class="card-title">Photo Collection</h4>
                    <p class="card-text">This is nice view</p>
                </div>
                <p>
                    <a href="#" class="btn btn-primary" role="button">View Detail</a> 
                    <a href="#" class="btn btn-light" role="button">Add to Cart</a>
                </p>
            </div>
    
            <div class="card col-sm-6 col-md-3 py-2 m-3 shadow  align-items-center">
                <img src="/images/thumb.jpeg" width="265px" height="280px" alt="img">
                <div class="card-body">
                    <h4 class="card-title">Photo Collection</h4>
                    <p class="card-text">This is nice view</p>
                </div>
                <p>
                    <a href="#" class="btn btn-primary" role="button">View Detail</a> 
                    <a href="#" class="btn btn-light" role="button">Add to Cart</a>
                </p>
            </div>
            <div class="card col-sm-6 col-md-3 py-2 m-3 shadow align-items-center">
                <img src="/images/thumb.jpeg" width="265px" height="280px" alt="img">
                <div class="card-body">
                    <h4 class="card-title">Photo Collection</h4>
                    <p class="card-text">This is nice view</p>
                </div>
                <p>
                    <a href="#" class="btn btn-primary" role="button">View Detail</a> 
                    <a href="#" class="btn btn-light" role="button">Add to Cart</a>
                </p>
            </div>
            <div class="card col-sm-6 col-md-3 py-2 m-3 shadow align-items-center">
                <img src="/images/thumb.jpeg" width="265px" height="280px" alt="img">
                <div class="card-body">
                    <h4 class="card-title">Photo Collection</h4>
                    <p class="card-text">This is nice view</p>
                </div>
                <p>
                    <a href="#" class="btn btn-primary" role="button">View Detail</a> 
                    <a href="#" class="btn btn-light" role="button">Add to Cart</a>
                </p>
            </div>
            <div class="card col-sm-6 col-md-3 py-2 m-3 shadow align-items-center">
                <img src="/images/thumb.jpeg" width="265px" height="280px" alt="img">
                <div class="card-body">
                    <h4 class="card-title">Photo Collection</h4>
                    <p class="card-text">This is nice view</p>
                </div>
                <p>
                    <a href="#" class="btn btn-primary" role="button">View Detail</a> 
                    <a href="#" class="btn btn-light" role="button">Add to Cart</a>
                </p>
            </div> --}}
            <!-- End Items -->
        </div>
    </div>

@endsection
