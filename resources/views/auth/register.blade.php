@extends('layout.template')

@section('title', 'Register From')

@section('content')

<div class="container">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header">
                <h4>Register Form</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}
                    <div class="form-group">
                        <label for="username">User Name</label>
                        <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                            name="name" value="{{ old('name') }}" placeholder="User Name" required>
                        @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                            name="email" value="{{ old('email') }}" placeholder="Email" required>
                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                        name="password" value="{{ old('password') }}" placeholder="Password"
                            required>
                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="password-comfirm">Confirm Password</label>
                        <input type="password" class="form-control{{ $errors->has('password-confirm') ? ' is-invalid' : '' }}"
                        name="password_confirmation" value="{{ old('password-confirm') }}"
                            placeholder="Confirm Password" required>
                        @if ($errors->has('password-confirm'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password-confirm') }}</strong>
                        </span>
                        @endif
                    </div>
                    <input type="submit" class="btn btn-primary fa-pull-right" value="Register">
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
