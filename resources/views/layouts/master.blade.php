
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

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      
    <!-- Jquery-Ui -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
    <!-- Custom styles for this template -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Start study section Modal CSS -->
    <link href="/css/start_section_modal.css" rel="stylesheet">
   
    <!-- DatePicker -->
    <script>
      $( function() {
        $( "#datepicker" ).datepicker();
      } );
    </script>

  </head>

  <body>

    <header>
      <div class="blog-masthead">
        @include('layouts.navbar')
      </div>
    </header>

    <main role="main" class="container">
     

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">

            @yield('content')
            @yield('show')
          </div><!-- /.blog-post -->

        </div><!-- /.blog-main -->

        @include('layouts.aside')

      </div><!-- /.row -->

    </main><!-- /.container -->

  @include('layouts.footer')
  </body>
</html>
