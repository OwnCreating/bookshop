@extends('frontend.layouts.template')

@section('title', 'Product Table')

@section('content')

<div class="container">
    <div class="card my-3 shadow-lg">
        <div class="card-body">
            <table class="table table-bordered table-responsive text-dark">
                <thead class="text-center text-bold">
                    <tr>
                        <th>No.</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=1;
                    @endphp
                    {{-- @foreach ($products as $product)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$product->title}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->cat_id}}</td>
                        <td>{{$product->brand_id}}</td>
                        <td>
                        @foreach (unserialize($product->images) as $image)
                            <img src="{{$image}}" class="pb-1" width="100" height="100" alt="image">        
                        @endforeach
                        </td>
                        <td>{{$product->price}}</td>
                        <td><a href="#" class="fas fa-edit" data-id=""></a></td>
                        <td><a href="#" class="fas fa-trash-alt" data-id=""></a></td>
                        
                    </tr>
                    @php
                        $i++;
                    @endphp
                    @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
