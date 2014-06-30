<?php

/**
* Friend Model
*/
class Friend
{
  public function __construct($db_connection)
  {
    $this->db = $db_connection;
  }

  // Function that return all friend from db
  // http://au1.php.net/manual/en/pdo.query.php
  public function all()
  {
    return $this->db->query('SELECT * FROM friends');
  }
}
