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
      <!-- Validation errors go here -->
      @if(Session::has('errors'))
      <div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <?php foreach ($errors->all() as $error): ?>
          <li>{{ $error }}</li>
        <?php endforeach ?>
      </div>
      @endif
      <!-- Validation errors end here -->
      @yield('content')
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    {{HTML::script('assets/js/bootstrap.min.js')}}
  </body>
</html>