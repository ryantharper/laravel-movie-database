@extends('layout')

@section('title', 'Welcome')

@section('content')

  <h1>Welcome to the Main Page.</h1>

  @foreach ($test as $testa)
    {{ $testa->title }}
    {{ $testa->id }}
  @endforeach

@endsection
