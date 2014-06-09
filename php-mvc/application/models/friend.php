<?php

/**
* Friends Class
*/
class Friend
{
  public function __construct($db)
  {
    $this->db = $db;
  }
  // Retrieving all friends
  public function all_friends()
  {
    return $this->db->db_query('SELECT name, phone FROM friends');
  }
}