<?php
/**
* Database Class
*/
class Database
{
  protected $server;
  protected $username;
  protected $password;
  protected $database_name;

  function __construct($database_name = 'akirachix', $server = 'localhost', $username = 'root', $password = '')
  {
    $this->database_name = $database_name;
    $this->server        = $server;
    $this->username      = $username;
    $this->password      = $password;
  }

  /**
   * Create Database Connection
   */
  public function connection()
  {
    return new mysqli($this->server, $this->username, $this->password, $this->database_name);
  }

  public function db_query($sql)
  {
    if ($result = $this->connection()->query($sql))
    {

      /* fetch object array */
      while ($obj = $result->fetch_object())
      {
        $items[] = $obj;
      }

      /* free result set */
      $result->close();

      return $items;
    }

  }
}

// Example Below

/**
* require 'Database.php'
* $db = new Database('akirachix');
* $result = $db->db_query('select * from friends');
*
* foreach ($result as $item) {
*   echo "<li>". $item->name . "</li>";
* }
*
**/
