<?php

class Console{
  private $name;
  private $price;
  private $make;

  public function __construct($name,$price){
      $this->name = $name;
      $this->price = $price;
  }

  public function setmake($make) {
      $this->make = $make;

  }

  public function getmake() {
    return $this->make;
  } 

  public function setName($name) {
    $this->name = name;
  }

  public function getName() {
    return $this->name;
  }

  public function setprice($price) {
    $this->price = price;
  }

  public function getprice() {
    return $this->price;
  }

}

?>