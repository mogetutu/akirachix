<div class="form-group">
  {{Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'username'])}}
</div>
<div class="form-group">
  {{Form::password('password', ['class' => 'form-control', 'placeholder' => 'password'])}}
</div>
<div class="form-group">
  {{Form::submit('Submit', ['class' => 'btn btn-success'])}}
</div>
