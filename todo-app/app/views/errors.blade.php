@if(Session::has('errors'))
  <div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      <strong>Warning!</strong>
      @foreach ($errors->all('<li>:message</li>') as $error)
          {{$error}}
      @endforeach
  </div>
@endif

@if(Session::has('message'))
  <div class="alert alert-warning alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      <strong>Info!</strong> {{Session::get('message')}}
  </div>
@endif
