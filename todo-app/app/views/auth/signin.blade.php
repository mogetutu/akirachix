@extends('master')
@section('content')
<div class="page-header">
  <div class="pull-right">
    <a href="{{route('signup')}}" class="btn btn-default">Sign Up</a>
  </div>
  <h2>Login</h2>
</div>
{{Form::open(['route' => 'login'])}}
  @include('auth._form')
{{Form::close()}}
@stop
