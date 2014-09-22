@extends('master')
@section('content')
  <div class="page-header">
    <h2>Create Todo item</h2>
  </div>
  {{Form::open(['route' => 'todos.store'])}}
  <div class="form-group">
    {{Form::text('todo', null, ['class' => 'form-control', 'placeholder' => 'Todo Item'])}}
  </div>
  <div class="form-group">
    {{Form::submit('Create Todo', ['class' => 'btn btn-success'])}}
  </div>
  {{Form::close()}}
@stop
