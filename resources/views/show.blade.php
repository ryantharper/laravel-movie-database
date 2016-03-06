@extends('layshow')

@section('item')

  <div class="row">
    <div class="col-lg-12">
      <h1>{{ $film->title }}</h1>
      <hr>
    </div>
  </div>

  <div class="row">
    <div class="col-md-8">
      <center>
        <img class="img-responsive" src='{!! asset("img/$film->title.jpg") !!}'>
      </center>
    </div>

    <div class="col-md-4">
      <h3>Plot</h3>
      <p>{{ $film->plot }}</p>
      <h3>Details</h3>
      <ul>
        <li>Year: {{ $film->year }}</li>
        <li>Rating: {{ $film->rating }}</li>
        <li>Genre(s): {{ $film->genre }}</li>
        <li>Play (DO THIS)</li>
      </ul>
    </div>

  </div>

@endsection
