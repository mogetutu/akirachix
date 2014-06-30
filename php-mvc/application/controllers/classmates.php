<?php

/**
* Classmates
*/
class Classmates extends Controller
{
  public function some()
  {
    $classmates_model = $this->load_model('classmate');
    $classmates = $classmates_model->all();

    require './application/views/classmates/some.php';
  }
}
