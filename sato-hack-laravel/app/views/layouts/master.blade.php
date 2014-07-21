<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hacking Users</title>

    <!-- Bootstrap -->
    {{HTML::style('assets/css/bootstrap.min.css')}}
  </head>
  <body>
    <div class="container">
      @include('layouts.alerts')
      @yield('content')
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    {{HTML::script('assets/js/bootstrap.min.js')}}
  </body>
</html>