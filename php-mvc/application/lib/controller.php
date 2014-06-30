<?php

/**
* Controller
*/
class Controller
{
  /**
   * Database Connection
   * @var object
   */
  protected $db;

  // Within constructor we create db connection
  public function __construct()
  {
    // PDO Database Connection
    // http://au1.php.net/manual/en/pdo.construct.php
    $dsn      = 'mysql:dbname=akirachix;host=127.0.0.1';
    $username = 'root';
    $password = '';
    $options  = array();
    $this->db = new PDO($dsn, $username, $password, $options);
  }

  public function load_model($model)
  {
    require './application/models/' . $model . '.php';

    return new $model($this->db);
  }
}
