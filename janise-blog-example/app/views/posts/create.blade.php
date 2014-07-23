@section('stuff')
<div class="page-header">
  <div class="pull-right">
    <a href="{{route('blog.index')}}" class="btn btn-default">Back</a>
  </div>
  <h2>Create Post</h2>
</div>
@if (Session::has('errors'))
<ul>
  @foreach($errors->all() as $error)
  <li>{{$error}}</li>
  @endforeach
</ul>
@endif
{{Form::open(['route' => 'blog.store'])}}
  @include('posts._form')
{{Form::close()}}
@stop
