@extends('master')
@section('content')
  <div class="page-header">
    <h2>
      Create Blog
    </h2>
  </div>
  {{Form::open(['route' => 'posts.store'])}}
  <div class="form-group">
    {{Form::text('title', null,['class' => 'form-control', 'placeholder' =>'Blog Title'])}}
  </div>

  <div class="form-group">
    {{Form::textarea('text', null,['class' => 'form-control', 'placeholder' =>'Blog Post'])}}
  </div>
  <div class="form-group">
    {{Form::submit('Create Post', ['class' => 'btn btn-success'])}}
  </div>
  {{Form::close()}}
@stop
