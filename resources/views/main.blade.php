<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="content">

  <title>Ryan's Movie Database</title>

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">

  <link href="{{{ asset('css/scrolling-nav.css') }}}" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

  <!-- Navigation -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="#page-top" class="navbar-brand page-scroll">Retflix</a>
      </div>

      <!-- Navbar Links, etc-->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <li class="hidden">
            <a class="page-scroll" href="#page-top"></a>
          </li>
          <li>
            <a class="page-scroll" href="#bugs">Report a Bug</a>
          </li>
          <li>
            <a class="page-scroll" href="#tvlist">TV Show List</a>
          </li>
          <li>
            <a class="page-scroll" href="#movlist">Movie List</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section id="intro" class="intro-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1>Retflix, R-Lex, Rulu</h1>
          <p>Clone of Netflix, Plex, etc.</p>
          <p>Website currently under construction!</p>
          <a href="#movlist" class="btn btn-default page-scroll">Click To See the Movie List!</a>
        </div>
      </div>
    </div>
  </section>

  <section id="bugs" class="about-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1>Report a Bug</h1>
          <p>To report a bug, send an email to <a href="mailto:ryan@rthweb.com">Ryan></a></p>
        </div>
      </div>
    </div>
  </section>

  <section id="tvlist" class="services-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1 style="margin-top:-10px;padding-bottom:10px;">TV Show List</h1>
          <!-- LIST TV SHOWS HERE -->
          @foreach ( $tvs as $tv )
            <div class="col-lg-2 col-md-4 col-xs-12 thumb"><a class="thumbnail" href="shows/{{ $tv->imdbid }}"><img class="img-responsive" src='{!! asset("img/$tv->title.jpg") !!}' style="min-height:225px;height:225px;min-width:150px;width:150px;"></a></div>
          @endforeach

        </div>
      </div>
    </div>
  </section>

  <section id="movlist" class="contact-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1 style="margin-top:-10px;padding-bottom:10px;">Movie List</h1>
          <!-- LIST MOVIES HERE -->

            @foreach ( $movs as $mov )
              <div class="col-lg-2 col-md-4 col-xs-12 thumb"><a class="thumbnail" href="movies/{{ $mov->id }}"><img class="img-responsive" src='{!! asset("img/$mov->title.jpg") !!}' style="min-height:225px;height:225px;min-width:150px;width:150px;"></a></div>
            @endforeach
      </div>
    </div>
  </section>





</body>
</html>
