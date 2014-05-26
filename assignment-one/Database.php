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

  function __construct($database_name, $server = 'localhost', $username = 'root', $password = '')
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
}

// initialize database object
$database = new Database('akirachix');

var_dump($database->connection());
