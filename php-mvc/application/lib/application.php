<?php

/**
* Application
*/
class Application
{

  function __construct()
  {
    /* Connect to an ODBC database using driver invocation */


    $dsn      = DB_TYPE.':dbname='.DATABASE.';host='.DB_HOST;
    $user     = DB_USER;
    $password = DB_PASSWORD;
    $options  = [PDO::ATTR_DEFAULT_FETCH_MODE =>  PDO::FETCH_OBJ];

    try {
        $this->db = new PDO($dsn, $user, $password, $options);
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
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
