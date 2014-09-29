<?php

/**
* Post Model
*/
class Post extends Eloquent
{
  protected $fillable = ['title', 'text', 'slug'];

  // A post belongs to an author
  public function author()
  {
    return $this->belongsTo('User', 'user_id');
  }

  public static function slugify($string)
  {
    return str_replace(' ', '-', strtolower($string));
  }
}
