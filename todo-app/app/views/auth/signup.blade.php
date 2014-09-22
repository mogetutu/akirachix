@extends('master')
@section('content')
<div class="page-header">
  <div class="pull-right">
    <a href="{{route('signin')}}" class="btn btn-default">Sign In</a>
  </div>
  <h2>Sign Up</h2>
</div>
{{Form::open(['route' => 'account'])}}
  @include('auth._form')
{{Form::close()}}
@stop
