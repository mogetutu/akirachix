<?php
// Parent Class
class Person
{
  public $firstname = 'isaak';
  public $lastname = 'mogetutu';

  public function fullnames()
  {
    return $this->firstname . ' ' . $this->lastname;
  }
}
