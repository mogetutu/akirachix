<?php

/**
 * Loads our application
 * Handles Routing
 * http://localhost/controller/method/:id
 */
class Application
{
  public function __construct()
  {
    $this->splitUrl();
    // require requested controller
    require './application/controllers/' . $this->controller . '.php';
  }

  public function splitUrl()
  {
    // Get User Request
    // http://au2.php.net/manual/en/reserved.variables.server.php
    $this->request = (isset($_SERVER['PATH_INFO'])) ? $_SERVER['PATH_INFO'] : false;

    // Remove slash from beginning of string
    // http://au2.php.net/manual/en/function.ltrim.php
    $this->request = ltrim($this->request, '/');

    // Split string with slash
    $uri = explode('/', $this->request);
    // Pick Controller Method Id from array
    $this->controller = (isset($uri[0])) ? $uri[0] : false;
    $this->method     = (isset($uri[1])) ? $uri[1] : false;
    $this->id         = (isset($uri[2])) ? $uri[2] : false;

    return $this;
  }
}
