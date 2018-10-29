@extends('layout')

@section('title','Usuarios')
@section('content')
    <h1>{{ $title }}</h1>
    @if (! empty($users))
        @foreach($users as $user)
            <ul>{{$user}}</ul>
        @endforeach
    @else
        <p>No hay usuarios registrados</p>
    @endif
@endsection