@extends('layout.template')

@section('title', 'All Role Page')

@section('content')
<div class="container">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header">All Users Page</div>
            <div class="card-body">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $role)
                            <tr>
                                <td>{{$role->id}}</td>
                                <td>{{$role->name}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    
@endsection