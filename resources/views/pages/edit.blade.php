@extends('layouts.app')

@section('content')
{!! Form::model($user, [
    'url' => route('users.update', $user->id), 
    'method' => 'patch'
    ]) !!}
@include('pages.form', ['formMode' => 'edit'])
{!! Form::close() !!}
@endsection