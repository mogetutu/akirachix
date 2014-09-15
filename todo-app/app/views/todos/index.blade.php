@extends('master')
@section('content')
<style>
  form {
    float:right;
    display: inline;
  }
</style>
  <div class="page-header">
    <div class="pull-right">
      <a href="/logout" class="btn btn-default">Logout</a>
    </div>
    <h2>Todos</h2>
  </div>
  @if(count($todos))
  <ul class="list-group">
    @foreach($todos as $todo)
      <li class="list-group-item">
        {{ $todo->task }}
        {{Form::open(['route' => ['todos.destroy', $todo->id], 'method' => 'DELETE'])}}
        {{Form::submit('delete', ['class' => 'btn btn-danger btn-xs'])}}
        {{Form::close()}}
      </li>
    @endforeach
  </ul>
  @endif
  <!-- Button trigger modal -->
<button class="btn btn-primary" data-toggle="modal" data-target="#newTodo">
  Add Todo
</button>
<!-- Modal -->
<div class="modal fade" id="newTodo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    {{Form::open(['route' => 'todos.store'])}}
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Create Todo</h4>
      </div>
      <div class="modal-body">
          {{Form::text('task', null, ['class' => 'form-control'])}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        {{Form::submit('Save Todo', ['class' => 'btn btn-primary'])}}
      </div>
      {{Form::close()}}
    </div>
  </div>
</div>
@stop
