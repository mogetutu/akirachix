<!-- Partial form -->
<p>{{Form::text('title', null, ['placeholder' => 'Title here', 'class' => 'form-control'])}}</p>
<p>{{Form::textarea('body', null, ['placeholder' => 'Body here', 'class' => 'form-control'])}}</p>
<p>{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}</p>
