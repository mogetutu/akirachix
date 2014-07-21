@extends('layouts.master')

@section('content')
<div class="page-header">
  <div class="pull-right">
    <div class="btn-group">
      <!-- Back to list of all users -->
      <a href="{{ route('users.index') }}" class="btn btn-default">Back</a>
      <!-- Link to Edit Profile Page -->
      <a href="{{ route('users.edit', array($user->id)) }}" class="btn btn-default">Edit Profile</a>
    </div>
  </div>
  <h2>Show Profile</h2>
</div>
<!-- User Details goes here -->
<p class="lead">Name: {{ $user->names }}</p>
<p class="lead">Gender: {{ $user->gender }}</p>
<p class="lead">Phone: {{ $user->phone }}</p>
<p class="lead">Country: {{ $user->country }}</p>
<p class="lead">Date of Birth: {{ $user->dob }}</p>
<p class="lead">Status: {{ $user->marital_status }}</p>
<p class="lead">Photo: {{ $user->photo }}</p>
@stop