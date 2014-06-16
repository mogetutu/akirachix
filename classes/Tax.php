<?php
require '../Person.php';
/**
* Tax inherits from Parent Class 'Person'
*/
class Tax extends Person
{

  public function tax()
  {
    return 16;
  }

  public function vat($vat = 14)
  {
    return $vat;
  }
}


$obj = new Tax;

$obj->fullnames(); // isaak mogetutu
$obj->tax(); // 16
$obj->vat(); // 14

$obj->vat(20); // 20 vat in zambia -- example
