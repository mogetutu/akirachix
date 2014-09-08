@extends('layouts.master')

@section('content')
<div class="page-header">
  <div class="pull-right">
    <!-- Check is user is logged in and display logout button -->
    @if(Auth::check())
      {{Form::model(Auth::user(),
        [
          'route'  => ['auth.destroy', Auth::id()],
          'method' => 'DELETE'
        ])
      }}
      {{Form::submit('Logout', ['class' => 'btn btn-primary'])}}
      {{Form::close()}}
    @endif
    <!-- Create profile button -->
    <a href="{{route('users.create')}}" class="btn btn-default">Create Profile</a>
  </div>
  <h2>Users</h2>
</div>
<!-- Search Form -->
<div class="pull-right">
  {{Form::open(['route' => 'users.search', 'method' => 'GET', 'class' => 'form-inline'])}}
    <div class="form-group">
      {{Form::text('names', null, ['class' => 'form-control'])}}
    </div>
    {{Form::submit('Search', ['class' => 'btn btn-default'])}}
    <a href="/users" class="btn btn-default">Cancel</a>
  {{Form::close()}}
</div>
<br>
<br>
<!-- Search Form ends here -->
<!-- Table with listing of users -->
<table class="table">
  <thead>
    <tr>
      <th>Names</th>
      <th>Phone</th>
      <th>Gender</th>
      <th colspan="2">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <td>{{ $user->names }}</td>
      <td>{{ $user->phone }}</td>
      <td>{{ $user->gender }}</td>
      <td>
        <a href="{{route('users.show', array($user->id))}}" class="btn btn-primary">View</a>
        <!-- DELETE HTTP REQUEST -->
        {{Form::model($user, array(
          'route' => array('users.destroy', $user->id),
          'method' => 'DELETE'
          ))
        }}
          {{Form::submit('Delete', array('class' => 'btn btn-danger'))}}
        {{Form::close()}}
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$users->links()}}
@stop
