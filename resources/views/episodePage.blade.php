@extends('layshow')

@section('item')

<div class="row">
  <div class="col-lg-12">
    <h1>{{ $epi->title }}</h1>
    <hr>
  </div>
</div>

<div class="row">
  <div class="col-md-8">
    <center>
      <img class="img-responsive" src='{!! asset("img/$shows->title/$epi->title.jpg") !!}'>
    </center>
  </div>

  <div class="col-md-4">
    <h3>Plot</h3>
    <p>{{ $epi->plot }}</p>
    <h3>Details</h3>
    <ul>
      <li>Rating: {{ $epi->rating }}</li>
      <li>Play (DO THIS)</li>
    </ul>
  </div>
  <!-- Episodes -->

</div>

@endsection
