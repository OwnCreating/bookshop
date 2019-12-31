@extends('layout.template')

@section('title', 'Admin Panel')

@section('content')

<div class="container">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header">
                <h3>Admin Panel</h3>
            </div>
            <div class="card-body">
                <h4>For User</h4>
                <hr class="sidebar-divider d-none d-md-block">
                <a href="{{route('user.index')}}"><button class="btn btn-primary">View All User</button></a>
                <hr class="sidebar-divider d-none d-md-block">
                
                <h4>For Role</h4>
                <hr class="sidebar-divider d-none d-md-block">
                <a href="{{route('role.index')}}"><button class="btn btn-primary">View All Role</button></a>
                <a href="{{route('role.create')}}"><button class="btn btn-primary">Create Role</button></a>
                <hr class="sidebar-divider d-none d-md-block">

                <h4>For Product</h4>
                <hr class="sidebar-divider d-none d-md-block">
                <a href="{{route('product.index')}}"><button class="btn btn-primary">View All Product</button></a>
                <a href="{{route('product.create')}}"><button class="btn btn-primary">Create Product</button></a>
                <hr class="sidebar-divider d-none d-md-block">

            </div>
        </div>
    </div>
</div>

@endsection
