<?php

/**
* Application
*/
class Application
{
  public $controller;
  public $action;
  public $variable;

  public function __construct()
  {
    // Load SplitUrl
    $this->splitUrl();
    // Require Controller Class as per first uri segement == url[0]
    require './application/controllers/'.$this->controller.'.php';
    // Create an Object of the loaded Class/Controller
    $object = new $this->controller;
    // Access method requested by user == url[1] / $this->action
    var_dump($object->{$this->action}());
  }


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
