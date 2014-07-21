<!-- Validation errors go here -->
@if(Session::has('errors'))
<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert">
    <span aria-hidden="true">&times;</span>
    <span class="sr-only">Close</span>
  </button>
  @foreach ($errors->all() as $error) ?>
    <li>{{ $error }}</li>
  @endforeach
</div>
@endif

@if(Session::has('alert'))
<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert">
    <span aria-hidden="true">&times;</span>
    <span class="sr-only">Close</span>
  </button>
  {{ Session::get('alert') }}
</div>
@endif
<!-- Validation errors end here -->