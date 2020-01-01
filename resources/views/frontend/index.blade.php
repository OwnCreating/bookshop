@extends('frontend.layouts.template')

@section('title', 'Home')

@section('content')

{{-- <div class="container"> --}}
<header class="py-3">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" width="1280px" height="360px" src="../images/carousel1.webp" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="w-100" width="1280px" height="360px" src="../images/carousel1.webp" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="w-100" width="1280px" height="360px" src="../images/carousel1.webp" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>

<div class="col-md-12 col-sm-12">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card boxxx">
                <img class="card-img-top" src="" alt="">
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Text</p>
                </div>
            </div>
        </div>

        <!-- Items -->
        @foreach ($products as $product)
        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
            <div class="card h-100 shadow align-items-center text-left">

                <img src="{{unserialize($product->images)[0]}}" class="card-img-top" width="200px" height="260px"
                    alt="img">

                <div class="card-body">
                    <h6 class="card-title">Title: {{$product->title}}</h6>
                    <h6 class="card-text">Description: {{substr($product->description,0,60)}}...</h6>
                    <p class="card-text">Prince: {{$product->price}}/ks</p>
                </div>
                <p>
                    <a href="{{route('front.show', $product->id)}}" class="btn btn-primary mr-3" role="button">View
                        Detail</a>
                    <a href="{{route('front.add', $product->id)}}" class="btn btn-light" role="button">Add to
                        Cart</a>
                </p>
            </div>
        </div>
        @endforeach
        <!-- End Items -->
    </div>
</div>
<div class="clearflex"></div>
{{-- </div> --}}

@endsection



{{-- @php
        var_dump($products);
        @endphp --}}
{{-- @foreach (unserialize($product->images) as $image)
                        <img src="{{$image}}" width="265px" height="280px" alt="img">
@php
break;
@endphp
@endforeach --}}
