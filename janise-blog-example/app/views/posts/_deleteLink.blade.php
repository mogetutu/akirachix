{{Form::model($post, ['route' => ['blog.destroy', $post->id], 'method' => 'DELETE'])}}
  {{Form::submit('delete', ['class' => 'btn btn-warning'])}}
{{Form::close()}}
