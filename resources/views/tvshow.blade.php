@extends('layshow')

@section('item')

  <div class="row">
    <div class="col-lg-12">
      <h1>{{ $show->title }}</h1>
      <hr>
    </div>
  </div>

  <div class="row">
    <div class="col-md-8">
      <center>
        <img class="img-responsive" src='{!! asset("img/$show->title.jpg") !!}'>
      </center>
    </div>

    <div class="col-md-4">
      <h3>Plot</h3>
      <p>{{ $show->plot }}</p>
      <h3>Details</h3>
      <ul>
        <li>Rating: {{ $show->rating }}</li>
        <li>Play (DO THIS)</li>
      </ul>
    </div>
    <!-- Episodes -->

  </div>
  <hr>
  <div class="row">
    <div class="col-lg-12">
      @foreach ( $ep as $e )


        <a href="/shows/{{ $show->imdbid }}/season={{ $e->season }}&episode={{ $e->episode }}">{{ $e->title }} : Season {{ $e->season }} Episode {{ $e->episode }}</a>

      @endforeach
    </div>
  </div>

@endsection
