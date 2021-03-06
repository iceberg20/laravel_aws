
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/images/favicon.ico">
  
    <title>Study Manager</title>

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Jquery-Ui -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- Bootstrap CSS and JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <!-- Custom styles for this template -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Start study section Modal CSS -->
    <link href="/css/start_section_modal.css" rel="stylesheet">
   
    <!-- DatePicker -->
    <script>
      $( function() {
        $( "#datepicker" ).datepicker();
      });
    </script>

  </head>

  <body>


<nav class="navbar navbar-toggleable-md navbar-inverse bg-primary">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Study Manager |</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/studysection">View All</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="/studysection/create">Create</a>
      </li>
      <li>
        <a class="nav-link" id="myBtn" href="#">Start</a>
      </li>
      <li>
        <a class="nav-link" href="/report">Report</a>
      </li>
      <li>
        <a class="nav-link" href="/config">Config</a>
      </li>  
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>




    <main role="main" class="container">
     

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">

            @yield('content')
            @yield('show')
          </div><!-- /.blog-post -->

        </div><!-- /.blog-main -->

      </div><!-- /.row -->

    </main><!-- /.container -->

  @include('layouts.footer')
  </body>
</html>
