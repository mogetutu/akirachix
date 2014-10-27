<h2>Login here</h2>

{{Form::open(['action' => 'AuthController@login'])}}
<div>
    <label for="Username">Username</label>
    {{Form::text('username', null)}}
</div>
<div>
    <label for="Password">Password</label>
    {{Form::password('password')}}
</div>
<div>
    {{Form::submit('Login')}}
</div>
{{Form::close()}}
