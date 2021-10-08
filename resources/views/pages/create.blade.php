@extends('layouts.app')

@section('content')
{!! Form::open(['url' => route('users.store'), 'method' => 'post']) !!}
@include('pages.form', ['formMode' => 'create'])
{!! Form::close() !!}
@endsection