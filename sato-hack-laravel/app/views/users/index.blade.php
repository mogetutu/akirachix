@extends('layouts.master')

@section('content')
<!-- Create profile button -->
<a href="{{route('users.create')}}" class="btn btn-default">Create Profile</a>
@stop