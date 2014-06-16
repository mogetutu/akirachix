<?php

/**
* Application
*/
class Application
{
  public $controller;
  public $action;
  public $variable;


  public function splitUrl()
  {
    $url = $_SERVER['REQUEST_URI'];

    // remove trailing slash
    $url = rtrim($url, '/');
    // Split url into logical chunks
    $url = explode('/', $url);
    // Remove first item in array
    array_shift($url);

    // Assign Controller
    if(isset($url[0])){
      $this->controller = $url[0];
    }

    // Assign Action
    if(isset($url[1])){
      $this->action = $url[1];
    }

    // Assign Variable
    if(isset($url[2])){
      $this->variable = $url[2];
    }
  }
}
