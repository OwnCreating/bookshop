@extends('layout.template')

@section('title', 'User Edit Form')

@section('content')

<div class="container">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header">
                <h4>Role Create Form</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('user.update', $user->id)}}">
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
                            name="name" value="{{ $user->name }}" placeholder="Name">
                        @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                            name="email" value="{{ $user->email }}" placeholder="email">
                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="role">role</label>
                        {{-- <input type="role" class="form-control{{ $errors->has('role') ? ' is-invalid' : '' }}"
                        name="role" value="{{ $role->name }}" placeholder="role"> --}}

                        <select class="custom-select{{ $errors->has('role') ? ' is-invalid' : '' }}"
                            name="role[]" value="" placeholder="role" multiple>
                            {{-- <option selected>Choose role ...</option> --}}
                            @foreach ($roles as $role)
                            <option value="{{ $role->id }}"" 
                                @if (in_array($role->name, $selectedRoles))
                                selected="selected"
                                @endif
                                >{{ $role->name }}</option>
                            @endforeach
                        </select>

                        @if ($errors->has('role'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('role') }}</strong>
                        </span>
                        @endif
                    </div>
                    <input type="submit" class="btn btn-primary fa-pull-right" value="Edit User">
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
