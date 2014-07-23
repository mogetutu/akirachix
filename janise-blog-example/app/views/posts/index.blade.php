@section('stuff')
<div class="page-header">
  <div class="pull-right">
    <a href="{{route('blog.create')}}" class="btn btn-default">Create Post</a>
  </div>
  <h2>Blog</h2>
</div>
@foreach($posts as $post)
  <a href="{{route('blog.show', [$post->id])}}"><h4>{{$post->title}}</h4></a>
  <p>{{$post->body}}</p>
  @include('posts._deleteLink')
@endforeach
{{$posts->links()}}
@stop
