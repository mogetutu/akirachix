<?php

class Database
{
  protected $server;
  protected $username;
  protected $password;
  protected $database_name;


  function __construct($database_name, $password, $username, $server)
  {
    $this->database_name = $database_name;
    $this->server        = $server;
    $this->username      = $username;
    $this->password      = $password;
  }

 
  public function connection()
  {
    $conn = new mysqli($this->server, $this->username, $this->password, $this->database_name);

    if ($conn->connect_error) {
      trigger_error('Database connection failed: '  . $conn->connect_error, E_USER_ERROR);
      exit;
    }else{
      // echo "Tuko Fiti; We are connected to ".$this->database_name." database";
      return $conn;
      }
  }


  public function db_query($query)
  {
    if ($result = $this->connection()->query($query))
    {

      while ($obj = $result->fetch_object())
      {
        $items[] = $obj;
      }

      $result->close();

      return $items;
    }

  }
}


