@section('stuff')
<div class="page-header">
  <div class="pull-right btn-group">
    <a href="{{route('blog.show', [$post->id])}}" class="btn btn-default">Back to Post</a>
    <a href="{{route('blog.index')}}" class="btn btn-primary">Blog &rarr;</a>
  </div>
  <h2>Update Post</h2>
</div>
{{Form::model($post, ['route' => ['blog.update', $post->id], 'method' => 'PUT'])}}
  @include('posts._form')
{{Form::close()}}
@stop
