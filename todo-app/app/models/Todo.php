<?php

/**
* Todo Model
*/
class Todo extends Eloquent
{

  protected $fillable = ['todo'];
  // relation between todo and user
  // a todo belongs to a user
  public function user()
  {
    return $this->belongsTo('User');
  }
}
