@extends('layouts.master')
@section('content')
<div class="page-header">
  <div class="pull-right">
    <!-- Create profile button -->
    <a href="{{route('auth.index')}}" class="btn btn-default">Sign In</a>
  </div>
  <h2>Sign Up</h2>
</div>

{{Form::open(['route' => 'auth.store', 'method' => 'POST'])}}
  <div class="form-group">
    {{Form::label('Username')}}
    {{Form::text('username', null, ['class' => 'form-control'])}}
  </div>
  <div class="form-group">
    {{Form::label('Password')}}
    {{Form::password('password', ['class' => 'form-control'])}}
  </div>
  {{Form::submit('Sign Up', ['class' => 'btn btn-primary'])}}
{{Form::close()}}
@stop
