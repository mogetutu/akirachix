<h2>Sign Up</h2>

{{Form::open(['action' => 'AuthController@signup'])}}
<div>
    <label for="Username">Username</label>
    {{Form::text('username', null)}}
</div>
<div>
    <label for="Password">Password</label>
    {{Form::password('password')}}
</div>
<div>
    {{Form::submit('Create Account')}}
</div>
{{Form::close()}}

<!-- Errors here -->
@include('layouts.errors')
