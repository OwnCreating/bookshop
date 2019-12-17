@extends('layout.template')

@section('title', 'Product Create')

@section('content')

<div class="container col-md-10 col-md-offset-1">
    <div class="card my-5 shadow-lg text-dark">
        <div class="card-body">
            @if (session('status'))
                <div class="col-md-6 offset-md-4 alert alert-success text-center">
                    {{session('status')}}
                </div>
            @endif
            <h4 class="card-title text-center text-primary">Create Form</h4>
            <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                    <div class="col-md-6">
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror"
                            name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                        @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description"
                        class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                    <div class="col-md-6">
                        <textarea id="description" type="text"
                            class="form-control @error('description') is-invalid @enderror" name="description"
                            value="{{ old('description') }}" required autocomplete="description" autofocus></textarea>

                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>
                    <div class="col-md-6">

                        <select class="form-control @error('category') is-invalid @enderror" name="category" id=""
                            value="{{ old('category') }}">
                            <option>choose category...</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>

                        @error('category')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="brand" class="col-md-4 col-form-label text-md-right">{{ __('Brand') }}</label>
                    <div class="col-md-6">

                        <select class="form-control @error('brand') is-invalid @enderror" name="brand" id=""
                            value="{{ old('brand') }}">
                            <option>choose brand...</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>

                        @error('brand')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="images" class="col-md-4 col-form-label text-md-right">{{ __('images') }}</label>

                    <div class="col-md-6">
                        <input id="images" type="file" class="@error('images') is-invalid @enderror" name="images"
                            value="{{ old('images') }}" required autocomplete="images" autofocus>

                        @error('images')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('price') }}</label>

                    <div class="col-md-6">
                        <input id="price" type="text" class="form-control @error('price') is-invalid @enderror"
                            name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>

                        @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-4"></div>
                    <div class="col-md-6">
                        <input type="submit" class="form-control btn btn-primary" value="Save">
                    </div>
                </div>
            </form>
        </div>
    </div>


</div>

@endsection
