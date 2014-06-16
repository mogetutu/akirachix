<?php

/**
* Test
*/
class Test
{
  // Define properties
  public $firstname;
  public $lastname;

  // Define methods
  public function fullnames()
  {
    return $this->firstname . ' ' . $this->lastname;
  }
}

// Accessing Class Properties
$obj = new Test;
$obj->firstname;
$obj->fullnames();


