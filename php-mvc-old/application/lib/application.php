<?php

/**
* Application
*/
class Application
{
  public $controller;
  public $method;
  public $variable;

  public function __construct()
  {
    // Load SplitUrl
    $this->splitUrl();
    // Require Controller Class as per first uri segement == url[0]
    $default_controller = 'Home';
    $controller         = ($this->controller) ? : $default_controller;
    $class              = "./application/controllers/{$controller}.php";

    if(file_exists($class)) {
      require $class;
      // Create an Object of the loaded Class/Controller
      $controller = new $controller;
      if (method_exists($controller, $this->method)) {
        return $controller->{$this->method}();
      }
      else {
        return $controller->index();
      }
    }
    else {
      echo "<h1>System Wahala!!</h1>";
    }
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
      $this->controller = (ucwords($url[0])) ? : $this->default_controller;
    }

    // Assign method
    if(isset($url[1])){
      $this->method = $url[1];
    }

    // Assign Variable
    if(isset($url[2])){
      $this->variable = $url[2];
    }
  }

  public function dd($value)
  {
    echo "<pre>";
    die(var_dump($value));
    echo "</pre>";
  }
}
