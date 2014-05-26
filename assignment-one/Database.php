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

  /**
   * Constructor
   * @param string $database_name default database table 'akirachix'
   * @param string $password      default blank password
   * @param string $username      default 'root'
   * @param string $server        default 'localhost'
   */
  function __construct($database_name = 'akirachix', $password = '', $username = 'root', $server = 'localhost')
  {
    $this->database_name = $database_name;
    $this->server        = $server;
    $this->username      = $username;
    $this->password      = $password;
  }

  /**
   * MySQLi connection
   * @return connection object
   */
  public function connection()
  {
    return new mysqli($this->server, $this->username, $this->password, $this->database_name);
  }

  /**
   * Database Querying Function
   * @param  string $query SQL Query
   * @return array        Array of records from Database query
   */
  public function db_query($query)
  {
    if ($result = $this->connection()->query($query))
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
// Assumes database with name 'akirachix' exists with username as 'root' and password as ''
// Database

/**
* require 'Database.php'
* $db = new Database('database_name');
* $result = $db->db_query('select * from friends');
*
* foreach ($result as $item) {
*   echo "<li>". $item->name . "</li>";
* }
*
**/
