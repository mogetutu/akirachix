<?php

/**
* Application
*/
class Application
{

  function __construct()
  {
    // set the (optional) options of the PDO connection. in this case, we set the fetch mode to
    // "objects", which means all results will be objects, like this: $result->user_name !
    // For example, fetch mode FETCH_ASSOC would return results like this: $result["user_name] !
    // @see http://www.php.net/manual/en/pdostatement.fetch.php
    $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);


    $dsn      = DB_TYPE.':dbname='.DATABASE.';host='.DB_HOST;
    $user     = DB_USER;
    $password = DB_PASSWORD;
    $options  = [PDO::ATTR_DEFAULT_FETCH_MODE =>  PDO::FETCH_OBJ];

    try {
        $this->db = new PDO($dsn, $user, $password, $options);
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
    // generate a database connection, using the PDO connector
    // @see http://net.tutsplus.com/tutorials/php/why-you-should-be-using-phps-pdo-for-database-access/
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
