@extends('master')
@section('content')
  <div class="page-header">
    <div class="pull-right">
      <a href="/signup" class="btn btn-default">Sign Up</a>
    </div>
    <h2>Login</h2>
  </div>
  {{Form::open(['action' => 'AuthController@login'])}}
  <div class="form-group">
    {{Form::text('username')}}
  </div>
  <div class="form-group">
    {{Form::password('password')}}
  </div>
  <div class="form-group">
    {{Form::submit('Login', ['class' => 'btn btn-success'])}}
  </div>
  {{Form::close()}}
@stop
