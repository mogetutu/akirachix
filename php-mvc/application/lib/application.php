<?php

/**
* Application
*/
class Application
{

  function __construct()
  {
    $this->db = new Database(DATABASE, DB_PASSWORD, DB_USER, DB_SERVER);
  }

  public function index()
  {
    // Database Call to friends table
    $obj = new Friend($this->db);
    $friends = $obj->all_friends();
    // Load View File
    require './application/views/friends.php';
  }
}
