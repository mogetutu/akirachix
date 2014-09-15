@extends('master')
@section('content')
  <div class="page-header">
    <div class="pull-right">
      <a href="/auth/create" class="btn btn-default">Sign Up</a>
    </div>
    <h2>Sign In</h2>
  </div>

  {{Form::open(['route' => 'auth.login'])}}
    <div class="form-group">
      {{Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Username'])}}
    </div>
    <div class="form-group">
      {{Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password'])}}
    </div>
    <div class="form-group">
      {{Form::submit('Login', ['class' => 'btn btn-primary btn-block'])}}
    </div>
  {{Form::close()}}
@stop
