@if($errors->all())
<?php foreach ($errors->all('<li>:message</li>') as $error): ?>
    {{$error}}
<?php endforeach ?>
@endif
