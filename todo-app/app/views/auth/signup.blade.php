@extends('master')
@section('content')
  <div class="page-header">
    <div class="pull-right">
      <a href="/" class="btn btn-default">Sign In</a>
    </div>
    <h2>Sign Up</h2>
  </div>
  @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
  @endforeach
  {{ Form::open(['route' => 'auth.store']) }}
    <div class="form-group">
      {{ Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Username']) }}
    </div>
    <div class="form-group">
      {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
    </div>
    <div class="form-group">
      {{ Form::submit('Create Account', ['class' => 'btn btn-primary btn-block']) }}
    </div>
  {{ Form::close() }}
@stop
