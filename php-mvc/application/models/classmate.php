<?php

/**
* Classmates
*/
class Classmate
{

  function __construct($db)
  {
    $this->db = $db;
  }

  public function all()
  {
    return $this->db->query('select * from classmates');
  }
}
