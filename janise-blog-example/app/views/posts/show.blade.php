@section('stuff')
<div class="page-header">
  <div class="pull-right">
    <a href="{{route('blog.index')}}" class="btn btn-default">Back</a>
  </div>
  <h2>{{$post->title}}</h2>
</div>
<p class="lead">
  {{$post->body}}
</p>
<a href="{{route('blog.edit', [$post->id])}}" class="btn btn-default">Update Post</a>
@stop
