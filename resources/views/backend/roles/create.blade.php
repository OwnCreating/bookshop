@extends('layout.template')

@section('title', 'Role Create Form')

@section('content')

<div class="container">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header">
                <h4>Role Create Form</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('role.store')}}">
                    @csrf
                    @if (session('status'))
                    <div class="col-md-12 alert alert-success text-center">
                        {{session('status')}}
                    </div> 
                    @endif
                    {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                            name="name" value="{{ old('name') }}" placeholder="Name">
                        @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                    <input type="submit" class="btn btn-primary fa-pull-right" value="Create Role">
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection