<?php

/**
 * Loads our application
 * Handles Routing
 * http://localhost/controller/method/:id
 */
class Application
{
  public function splitUrl()
  {
    // Get User Request
    // http://au2.php.net/manual/en/reserved.variables.server.php
    $request = $_SERVER['PATH_INFO'];



    return $request;
  }
}
