<?php

/**
* Friends Class
*/
class Friends extends Controller
{
  public function all()
  {
    $friends_model = $this->load_model('friend');
    $friends       = $friends_model->all();

    require './application/views/friends/all.php';
  }
}
