@extends('layouts.app');

@section('content')
<div class="container">
    <div class="text-right">
        {{-- <button class="btn btn-success my-3">Create New User</button> --}}
    </div>

    <h1>Product ID #{{ $user->id }}</h1>

    <table class="table table-stripped mt-5">
                    
            <tr>
                <th>Name</th>
                <td>{{ $user->name }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $user->email }}</td>
            </tr>
            <tr>
                <th>Joined</th>
                <td>{{ date('d M Y', strtotime($user->created_at)) }}</td>
            </tr>                 
    </table>

    <div class="text-center mt-5">
        <a href="{{ route('users.index') }}" class="btn btn-warning">Back</a>
        {{-- <button class="btn btn-primary">Edit</button>
        <button class="btn btn-danger">Delete</button> --}}
    </div>

</div>
@endsection