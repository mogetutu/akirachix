@extends('master')
@section('content')
  <div class="page-header">
    <a href="{{route('posts.index')}}" class="btn btn-default">
      &larr; Back to Post
    </a>
  </div>
  <p class="lead">{{$post->title}}</p>
  <p>
    {{$post->text}}
  </p>
  <blockquote>
    <small>Author</small>
    {{$post->author->username}}
  </blockquote>
@stop
