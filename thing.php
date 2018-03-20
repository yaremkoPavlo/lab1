<?php
class Thing {
  private $category;
  private $price;
  private $name;
  private $avaible;
  private $iCharact;

  public function __construct($category, $price, $name, $avaible, $iCharact) {
    $this->category = $category;
    $this->price = $price;
    $this->name = $name;
    $this->avaible = $avaible;
    $this->iCharact = $iCharact;
  }

  
}
 ?>
