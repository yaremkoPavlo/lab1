<?php
class Service {
  private $price;

  public function __construct() {
    $this->price = rand(1,10);
  }

  public function getPrice() {
    return $this->price;
  }
}
?>
