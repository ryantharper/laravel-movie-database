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

  <link href="{{{ asset('css/portfolio-item.css') }}}" rel="stylesheet">

</head>

<body>

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
        <a href="/" class="navbar-brand page-scroll">Retflix</a>
      </div>

      <!-- Navbar Links, etc-->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <li class="hidden">
            <a class="page-scroll" href="#page-top"></a>
          </li>
          <li>
            <a class="page-scroll" href="/#bugs">Report a Bug</a>
          </li>
          <li>
            <a class="page-scroll" href="/#tvlist">TV Show List</a>
          </li>
          <li>
            <a class="page-scroll" href="/#movlist">Movie List</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    @yield('item')

    <hr>

    <footer>
      <div class="row">
        <div class="col-lg-12">
          <p>
            Copyright &copy; Ryan Harper 2016
          </p>
        </div>
      </div>
    </footer>
  </div>
</body>
</html>
