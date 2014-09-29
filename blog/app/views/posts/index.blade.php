@extends('master')
@section('content')
  <div class="page-header">
    @if(Auth::check())
    <div class="pull-right btn-group">
      <a href="{{route('posts.create')}}" class="btn btn-default">Create Blog</a>

      <a href="/logout" class="btn btn-primary">Logout</a>
    </div>
    @else
    <div class="pull-right btn-group">
      <a href="/login" class="btn btn-primary">Login</a>
    </div>
    @endif
    <h2>Blog</h2>
  </div>
  <p>
  {{Form::open(['route' => 'posts.search', 'method' => 'GET', 'class' => 'form-inline'])}}
    {{Form::text('search', null, ['class' => 'form-control'])}}
    {{Form::submit('Search', ['class' => 'btn btn-default'])}}
  {{Form::close()}}
  </p>
  @foreach ($posts as $post)
    <li>
      <h2>
        <a href="{{route('posts.show', [$post->slug])}}">
          {{$post->title}}
        </a>
      </h2>
    </li>
  @endforeach

  {{$posts->links()}}
@stop
