<?php

/**
* Todo Class
*/
class Todo extends Eloquent
{
  protected $fillable = ['task'];

  /**
   * Todo belongs to a User
   * @return relation
   */
  public function user()
  {
    return $this->belongsTo('User');
  }
}
