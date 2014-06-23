<?php

/**
*  Classmates
*/
class Classmates extends Controller
{

  public function index()
  {
    echo "This is the index function";
  }

  function all()
  {
    return "All Classmates";
  }

  public function some()
  {
    return "Some Classmates";
  }
}
